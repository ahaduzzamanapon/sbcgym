<?php

namespace App\DataTables;

use App\Models\Package;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PackageDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable
            ->editColumn('pack_status', function ($package) {
                return $package->pack_status == 1 ? 'Active' : 'Inactive';
            })
            ->addColumn('action', 'packages.datatables_actions');
    }


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Package $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Package $model)
    {
        $query = $model->newQuery()
                    ->leftJoin('multi_branchs', 'packages.branch_id', '=', 'multi_branchs.id')
                    ->select([
                        'packages.*', // Select all columns from the packages table
                        'multi_branchs.branch_name as branch_name' // Alias branch_name
                    ]);

        // Check permissions and filter by branch accordingly
        if (if_can('male-access')) {
            $query->where('packages.branch_id', 1); // Male branch
        } elseif (if_can('female-access')) {
            $query->where('packages.branch_id', 2); // Female branch
        } elseif (!if_can('see_all_branch')) {
            $query->where('packages.branch_id', get_branch());
        }

        return $query;
    }
    
    

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax(url('packages'))
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'excel', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            'pack_name',
            'branch_name'=> ['searchable' => false],
            'pack_admission_fee',
            'pack_duration',
            'pack_status'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename() : string
    {
        return '$MODEL_NAME_PLURAL_SNAKE_$datatable_' . time();
    }
}