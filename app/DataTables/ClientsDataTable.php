<?php

namespace App\DataTables;

use App\Models\Client;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ClientsDataTable extends DataTable
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
        ->editColumn('created_at', function($user) {
            return \Carbon\Carbon::parse($user->created_at)->format("d-m-Y");
        })
        ->addColumn('actions', function($client) {
            return view('clients.partials.action-buttons', compact('client'))->render();
        })
        ->rawColumns(['actions']);
        ;
            // ->addColumn('action', 'clients.action')
            // ->setRowId('id');
}

    /**
     * Get the query source of dataTable.
     */
    public function query(Client $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
        ->setTableId('clients-table')
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
        ])
        ;
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')->title('#'),
            // Column::computed('action')
            //       ->exportable(false)
            //       ->printable(false)
            //       ->width(60)
            //       ->addClass('text-center'),
            // Column::make('id'),
            Column::make('contact_email'),
            Column::make('contact_name'),
            Column::make('contact_phone_number'),
            Column::make('actions'),
            // Column::make('created_at'),
            // Column::make('updated_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Clients_' . date('YmdHis');
    }
}
