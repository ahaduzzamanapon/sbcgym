<?php

namespace App\DataTables;

use App\Models\Income;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class IncomeDataTable extends DataTable
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

        return $dataTable->editColumn('created_at', function ($row) {
            return $row->created_at ? $row->created_at->format('Y-m-d H:i A') : null;
        })
        ->editColumn('updated_at', function ($row) {
            return $row->updated_at ? $row->updated_at->format('Y-m-d H:i A') : null;
        })
        ->addColumn('action', 'incomes.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Income $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Income $model)
    {
        $query = $model->newQuery()
            ->leftJoin('multi_branchs', 'incomes.branch_id', '=', 'multi_branchs.id')
            ->select([
                'incomes.*', // Select all incomes columns
                'multi_branchs.branch_name'
            ]);

        // Check permissions and filter by branch accordingly
        if (if_can('male-access')) {
            $query->where('incomes.branch_id', 1); // Male branch
        } elseif (if_can('female-access')) {
            $query->where('incomes.branch_id', 2); // Female branch
        } elseif (!if_can('see_all_branch')) {
            $query->where('incomes.branch_id', get_branch());
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
            ->minifiedAjax(url('incomes'))
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
            'title',
            'branch_name',
            'amount',
            'description',
            'created_at' => ['searchable' => false],
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
