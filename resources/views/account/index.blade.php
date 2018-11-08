@extends('laravel-enso/core::layouts.app')

@section('pageTitle', __("Account"))

@section('content')

    <section class="content-header" v-cloak>

        <page v-cloak>
            <div class="col-xs-12">
                <data-table id="index-course-financials-id"
                            source="/account/courseFinancials"
                            ref="courseFinancialsTable"
                            @pay="handlePay"
                            :custom-render="customRender">
                </data-table>
            </div>


            <div class="row">

                <div class="col-xs-12">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <data-table id="index-course-schedules-id"
                                    source="/account/courseSchedules"
                                    ref="courseSchedulesTable"
                        >
                        </data-table>
                    </div>

                    <div class="col-md-4" style="height: 100%;">
                        <box icon="fa fa-bullhorn"
                             title="Anunturi">

                            <div class="invoice" >
                                <p>In 5.11.2018, Asociata Top a scris</p>
                                <p class="well">
                                    Dragi cursanti,
                                    <br>
                                    Va anuntam ca din motive independente de vointa noastra, cursul de matematica de marti este
                                    anulat.
                                    <br>

                                    Centrul de meditatii TOP
                                </p>
                            </div>
                        </box>
                    </div>
                </div>
            </div>
        </page>
    </section>


@endsection

@push('scripts')

    <script>

        let vue = new Vue({
            el: '#app',
            methods: {
                customRender(column, data, type, row, meta) {
                    switch (column) {
                        case 'invoice_link':
                            return this.invoice(data);
                        default:
                            toastr.warning('render for column ' + column + ' is not defined.');
                            return data;
                    }
                },
                invoice: function (link) {
                    return '<span style="display: inline-flex">' +
                        '<a class="btn btn-xs btn-success margin-left-xs" href="' + link + '" target="_blank">' +
                        '<i class="fa fa-eye"></i>' +
                        '</a>' +
                        '</span>';
                },
                handlePay: function (payload) {
                    alert(payload);
                }
            },
        });

    </script>

@endpush
