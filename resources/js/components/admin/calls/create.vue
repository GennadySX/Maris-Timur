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
                                <label class="control-label col-md-3 col-sm-3 col-xs-3" >Ваш номер</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <select class="form-control" name="device_id">
                                        <option value="1">+7 999 150 15-74</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Номер абонента</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="Number">
                                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3" name="RingType">Тип</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <select class="form-control" name="RingType">
                                        <option value="1">Междугородный</option>
                                        <option value="0">Международный</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Страна</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="Country">
                                    <span class="fa fa-globe form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Город</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="Town">
                                    <span class="fa fa-building-o form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Минут</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="Value">
                                    <span class="fa fa-clock-o form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Стоимость</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="text" class="form-control" name="Sum">
                                    <span class="fa fa-usd form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Дата</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <input type="datetime-local" data-date-format="DD MMMM YYYY " :value="now" class="form-control" name="dateRing">
                                    <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Коммент</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <textarea class="form-control" rows="3" placeholder="Введите текст" name="Comment"></textarea>
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
                now: ''
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
                 axios.post('/home/ring/create', this.formData).then(res => {
                     if(res.data.status) {
                         $('#closeModalCreate').trigger('click');
                         this.$emit('created', res.data.ring);
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
                // console.log('date is', this.now)
            }
        }
    }
</script>

<style scoped>

</style>
