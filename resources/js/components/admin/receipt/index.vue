<template>
    <div class="">
        <div class="page-title">
            <receipt-create
                @created='created'
            ></receipt-create>

            <receipt-edit
                @changed='changed'
            ></receipt-edit>
            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row" style="display: block;">
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Таблица <small>звонков</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                <tr class="headings">
                                    <th class="column-title">Номер оплаты</th>
                                    <th class="column-title">Дата</th>
                                    <th class="column-title">Сумма</th>
                                    <th class="column-title">Счет</th>
                                    <th class="column-title">Банк</th>
                                    <th class="column-title">Адресс</th>
                                    <th class="column-title">Тариф</th>
                                    <th class="column-title">Тип льготы</th>
                                    <th class="column-title">Величина льготы</th>
                                    <th class="column-title">Операции</th>
                                    <th class="bulk-actions" colspan="7">
                                        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                            class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                    </th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr class="even pointer" v-if="itemList " v-for="(item, index) in itemList"
                                    :key="index">
                                    <td class="pl-3">{{item.MapPhone}}</td>
                                    <td class=" ">{{item.DateMap}}</td>
                                    <td class=" ">{{item.MapCount}}</td>
                                    <td class=" ">{{item.Account}}</td>
                                    <td class=" ">{{item.Bank}}</td>
                                    <td class=" ">{{item.PhoneAddress}}</td>
                                    <td class=" "> {{item.Value}}</td>
                                    <td class=" "> {{item.ExemptType}}</td>
                                    <td class=" "> {{item.Exempt}}</td>
                                    <td class="d-flex text-center">
                                        <button class="btn btn-primary mr-1" @click="editIt($event,item, index)"
                                                data-toggle="modal" data-target="#editModalCenter"><i
                                            class="fa fa-pencil"></i></button>
                                        <a class="btn btn-danger" :href="path+'/delete/'+ item.id"
                                                data-toggle="modal" data-target="#deleteModalCenter"><i
                                            class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ReceiptCreate from './create'
    import ReceiptEdit from './edit'

    export default {
        name: "index",
        props: {
            item_data: null
        },
        components: {
            ReceiptCreate,
            ReceiptEdit
        },
        data() {
            return {
                itemList: null,
                path: window.location.pathname
            }
        },
        created() {
            this.itemList = (this.item_data) ? JSON.parse(this.item_data) : this.item_c;
            console.log('data', this.itemList)
        },
        methods: {
            created(data) {
                this.itemList.push(data)
            },
            changed(data, index) {
                Object.keys(data).map((keys) =>  this.itemList[index][keys] = data[keys])
            },
            editIt(e, item, index) {
                e.preventDefault()
                this.$bus.$emit('edit', item, index)
            },
            deleteIt(e, item) {
                e.preventDefault()

            },

        }
    }
</script>

<style scoped>

</style>
