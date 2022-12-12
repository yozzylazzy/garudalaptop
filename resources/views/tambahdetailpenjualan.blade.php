<div class="container py-2">
    <div class="row mb-3">
        <div class="col-md-12 form_sec_outer_task border">
            <div class="row">
                <div class="col-md-12 bg-light p-2 mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="frm_section_n">DETAIL DATA PEMBELIAN LAPTOP</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label> ID Laptop </label>
                </div>
                <div class="col-md-4">
                    <label> Jumlah Pembelian </label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-12 form_field_outer">
                    <div class="row form_field_outer_row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="IDLaptop[1]" id="idlaptop_1"
                                placeholder="Masukkan IDLaptop" />
                        </div>
                        <div class="form-group col-md-5">
                            <input type="number" class="form-control" name="jumlah[1]" id="jumlah_1"
                                placeholder="Masukkan Jumlah Pembelian" />
                        </div>
                        <div class="form-group col-md-1 add_del_btn_outer">
                            <button style="vertical-align: middle;" class="btn btn-danger btn-md" disabled>
                                <i style="vertical-align: middle;" class="fas fa-trash-alt"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-light mt-3 border py-3">
                <div class="col-md-12">
                    <a class="btn btn-dark btn-md py-0 add_new_frm_field_btn"><i class="fas fa-plus add_icon"></i>
                        Tambah Pembelian Laptop</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){ $("body").on("click",".add_new_frm_field_btn", function (){ console.log("clicked"); var index = $(".form_field_outer").find(".form_field_outer_row").length + 1; $(".form_field_outer").append(`
    <div class="row mt-3 form_field_outer_row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control w_90" name="IDLaptop[${index}]" id="idlaptop_${index}"
                                placeholder="Masukkan IDLaptop" />
                        </div>
                        <div class="form-group col-md-5">
                            <input type="number" class="form-control w_90" name="jumlah[${index}]" id="jumlah_${index}"
                                placeholder="Masukkan Jumlah Pembelian" />
                        </div>
                        <div class="form-group col-md-1 add_del_btn_outer">
                            <a style="vertical-align: middle;" class="btn btn-danger btn-md remove_node_btn_frm_field">
                                <i style="vertical-align: middle;" class="fas fa-trash-alt"></i>
                            </a>
                        </div>
                    </div>
`); $(".form_field_outer").find(".remove_node_btn_frm_field:not(:first)").prop("disabled", false); $(".form_field_outer").find(".remove_node_btn_frm_field").first().prop("disabled", true); }); });

$(document).ready(function () {
  //===== delete the form fieed row
  $("body").on("click", ".remove_node_btn_frm_field", function () {
    $(this).closest(".form_field_outer_row").remove();
    console.log("success");
  });
});
</script>