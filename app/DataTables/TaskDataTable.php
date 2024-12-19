<?php

namespace App\DataTables;

use App\Models\Task;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TaskDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('actions', function (Task $task) {
                return view('tasks.partials.action-buttons', ['task' => $task])->render();
            })
            ->editColumn('project_id', function($task) {
                return $task->project->title;
            })
            ->rawColumns(['actions'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Task $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
        ->setTableId('task-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
                    //->dom('Bfrtip')
        ->orderBy(1)
        ->selectStyleSingle()
        ->buttons([
            Button::make('excel'),
            Button::make('csv'),
            Button::make('pdf'),
            Button::make('print'),
            Button::make('reset'),
            Button::make('reload')
        ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title("#"),
            Column::make('title'),
            Column::make('project_id')->title("Assigned Project"),
            Column::make('deadline_at'),
            Column::make('status')->class('text-capitalize'),
            Column::make('actions'),

        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Task_' . date('YmdHis');
    }
}
