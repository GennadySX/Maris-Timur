<template>
    <div class="title_left">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
            Создать новый
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Звонок</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal form-label-left" id="sendForm">
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3" >Телефон номер</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <select class="form-control" name="device_id">
                                        <option value="1">+7 999 150 15-74</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Дата</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="datetime-local" data-date-format="DD MMMM YYYY " :value="now" class="form-control" name="DateClaim">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Номер</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="NumberClaim">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Мастер</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="Inspector">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Дата выдачи</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="datetime-local" data-date-format="DD MMMM YYYY " :value="tomorrow" class="form-control" name="DateRepair">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Вычеты</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="Compensation">
                                </div>
                            </div>
                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeModalCreate">Отменить</button>
                        <button type="button" class="btn btn-success" @click="send">Сохранить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "create",
        props: {
            profile_data: null
        },
        data() {
            return {
                formData: {},
                now: '',
                tomorrow: '',
            }
        },
        created() {
        },
        mounted() {
            setInterval(() => this.dateInit(), 1000)
        },
        methods: {
            send() {
                const  data = $('#sendForm').serializeArray();
                Object.keys(data).map((key, index) => this.formData[data[key]['name']] = data[key]['value']);
                axios.post('/home/repair/create', this.formData).then(res => {
                    if(res.data.status) {
                        $('#closeModalCreate').trigger('click');
                        this.$emit('created', res.data.repair);
                    }
                })
            },
            dateInit() {
                const now = new Date(),
                    month = (now.getMonth() < 10) ? '0'+now.getMonth() : now.getMonth(),
                    getDay = (now.getDay() < 10) ? '0'+now.getDay() : now.getDay(),
                    getHours = (now.getHours() < 10) ? '0'+now.getHours() : now.getHours(),
                    getMinutes = (now.getMinutes() < 10) ? '0'+now.getMinutes() : now.getMinutes()
                this.now = `${now.getFullYear()}-${month}-${getDay}T${getHours}:${getMinutes}`
                this.tomorrow = `${now.getFullYear()}-${month}-${getDay}T${getHours}:${getMinutes}`
                // console.log('date is', this.now)
            }
        }
    }
</script>

<style scoped>

</style>
