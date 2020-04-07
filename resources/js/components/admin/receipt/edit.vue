<template>
    <div class="modal fade" id="editModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal form-label-left" id="editForm" v-if="item">
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3" >Ваш номер</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <select class="form-control" name="device_id" :value="item.device_id">
                                    <option value="1">+7 999 150 15-74</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Номер оплаты</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="text" class="form-control" name="MapPhone" :value="item.MapPhone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Дата</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="datetime-local" data-date-format="DD MMMM YYYY " :value="item.DateMap.toString().replace(' ', 'T')" class="form-control" name="DateMap" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Сумма</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="text" class="form-control" name="MapCount" :value="item.MapCount">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Счет</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="text" class="form-control" name="Account" :value="item.Account">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Банк</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="text" class="form-control" name="Bank" :value="item.Bank">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Адресс</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="text" class="form-control" name="PhoneAddress" :value="item.PhoneAddress">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Тариф</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <select class="form-control" name="Value" :value="item.Value">
                                    <option value="100">100</option>
                                    <option value="200">200</option>
                                    <option value="300">300</option>
                                    <option value="400">400</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Тип льготы</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="text" class="form-control" name="ExemptType" :value="item.ExemptType">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-md-3 col-sm-3 col-xs-3">Величина льготы</label>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <input type="text" class="form-control" name="Exempt" :value="item.Exempt">
                            </div>
                        </div>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModalEdit">Отменить</button>
                    <button type="button" class="btn btn-success" @click="send">Сохранить</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "edit",
        props: {
            profile_data: null
        },
        data() {
            return {
                item: null,
                formData: {},
                now: '',
                itemIndex: 0
            }
        },
        created() {
        },
        mounted() {
            this.$bus.$on('edit', (item, index) => {
                this.item = item
                this.itemIndex = index
            } )
        },
        methods: {
            async send() {
                const  data = $('#editForm').serializeArray();
                Object.keys(data).map((key, index) => this.formData[data[key]['name']] = data[key]['value']);
                this.formData.id = this.item.id
                $('#closeModalEdit').trigger('click');
                await axios.post('/home/receipt/update', this.formData).then(res => {
                    if(res.data.status) {
                        this.$emit('changed', res.data.receipt[0], this.itemIndex);
                    }
                });

            },
        }
    }
</script>

<style scoped>

</style>
