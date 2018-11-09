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
                                    :custom-render="customRender"
                        >
                        </data-table>
                    </div>

                    <div class="col-md-4" style="height: 100%;">
                        <box icon="fa fa-bullhorn"
                             title="Anunturi">

                            <div class="invoice">
                                <p>In 5.11.2018, Asociata Top a scris</p>
                                <p class="well">
                                    Dragi cursanti,
                                    <br>
                                    Va anuntam ca din motive independente de vointa noastra, cursul de matematica de
                                    marti este
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
            data: {
                cancelledColor: '#E92525'
            },
            methods: {
                customRender(column, data, type, row, meta) {
                    switch (column) {
                        case 'invoice_link':
                            return this.invoice(data);
                        case 'monday':
                            return this.hour(data, '#83EA83');
                        case 'tuesday':
                            return this.hour(data, '#3DCD3D');
                        case 'wednesday':
                            return this.hour(data, '#1DBB1D');
                        case 'thursday':
                            return this.hour(data, '#2E9C9C');
                        case 'friday':
                            return this.hour(data, '#168C8C');
                        case 'saturday':
                            return this.hour(data, '#FF9D4C');
                        case 'sunday':
                            return this.hour(data, '#E97E25');
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

                    const link = this.getLink(payload);

                    if (link !== '#') {
                        window.open(link, '_blank');
                    }
                },
                hour: function (data, color) {

                    if (!data) {
                        return '';
                    }

                    if (data === 'anulat') {
                        color = this.cancelledColor;
                    }

                    return '<span class="label" style="background-color: ' + color + '">' + data + '</span>';
                },
                getLink: function (payload) {

                    const row = Array.from(
                        this.$refs.courseFinancialsTable.dtHandle.rows().data()
                        )
                        .find(function (elem) {
                            return elem.DT_RowId == payload;
                        });

                    return row.payment_link;
                },
            },
        });

    </script>

@endpush
