<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.36571" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.36571" type="text/javascript"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/punycode/1.4.1/punycode.js"></script>
<script src="https://cdn03.jotfor.ms/js/vendor/jquery-1.8.0.min.js?v=3.3.36571" type="text/javascript"></script>
<script defer src="https://cdn01.jotfor.ms/js/vendor/maskedinput.min.js?v=3.3.36571" type="text/javascript"></script>
<script defer src="https://cdn02.jotfor.ms/js/vendor/jquery.maskedinput.min.js?v=3.3.36571" type="text/javascript"></script>
<script type="text/javascript">	
    JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = false;
	JotForm.newPaymentUIForNewCreatedForms = false;
	JotForm.newPaymentUI = true;

	JotForm.init(function(){
	/*INIT-START*/
      setTimeout(function() {
          $('input_6').hint('ex: myname@example.com');
       }, 20);
      JotForm.setPhoneMaskingValidator( 'noCustKontrak', '######' );
      /* JotForm.setPhoneMaskingValidator( 'nilaiAset', '###########' );
      JotForm.setPhoneMaskingValidator( 'biayaLainnya', '#########' );
      JotForm.setPhoneMaskingValidator( 'uangMuka', '#########' );
      JotForm.setPhoneMaskingValidator( 'asuransiTunai', '#########' );
      JotForm.setPhoneMaskingValidator( 'lamaKredit', '##' ); */
      JotForm.setPhoneMaskingValidator( 'input_26_full', '+###/###' );
if (window.JotForm && JotForm.accessible) $('input_14').setAttribute('tabindex',0);
if (window.JotForm && JotForm.accessible) $('input_45').setAttribute('tabindex',0);
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"clickTo","qid":"1","text":"Student Registration Form","type":"control_head"},null,{"name":"gender","qid":"3","text":"Gender","type":"control_dropdown"},{"name":"studentName","qid":"4","text":"Student Name","type":"control_fullname"},null,{"name":"studentEmail6","qid":"6","subLabel":"example@example.com","text":"Student E-mail","type":"control_email"},null,null,null,null,null,null,null,{"name":"company","qid":"14","text":"Company","type":"control_textbox"},null,null,null,null,{"name":"submit","qid":"19","text":"Clear Fields","type":"control_button"},{"name":"submit20","qid":"20","text":"Submit Application","type":"control_button"},null,null,{"name":"address","qid":"23","text":"Address","type":"control_address"},{"name":"birthDate24","qid":"24","text":"Birth Date","type":"control_birthdate"},{"name":"phoneNumber25","qid":"25","text":"Phone Number","type":"control_phone"},{"name":"workNumber","qid":"26","text":"Work Number","type":"control_phone"},{"name":"mobileNumber","qid":"27","text":"Mobile Number","type":"control_phone"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"clickTo45","qid":"45","text":"Additional Comments","type":"control_textarea"},{"name":"courses","qid":"46","text":"Courses","type":"control_dropdown"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"clickTo","qid":"1","text":"Student Registration Form","type":"control_head"},null,{"name":"gender","qid":"3","text":"Gender","type":"control_dropdown"},{"name":"studentName","qid":"4","text":"Student Name","type":"control_fullname"},null,{"name":"studentEmail6","qid":"6","subLabel":"example@example.com","text":"Student E-mail","type":"control_email"},null,null,null,null,null,null,null,{"name":"company","qid":"14","text":"Company","type":"control_textbox"},null,null,null,null,{"name":"submit","qid":"19","text":"Clear Fields","type":"control_button"},{"name":"submit20","qid":"20","text":"Submit Application","type":"control_button"},null,null,{"name":"address","qid":"23","text":"Address","type":"control_address"},{"name":"birthDate24","qid":"24","text":"Birth Date","type":"control_birthdate"},{"name":"phoneNumber25","qid":"25","text":"Phone Number","type":"control_phone"},{"name":"workNumber","qid":"26","text":"Work Number","type":"control_phone"},{"name":"mobileNumber","qid":"27","text":"Mobile Number","type":"control_phone"},null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,{"name":"clickTo45","qid":"45","text":"Additional Comments","type":"control_textarea"},{"name":"courses","qid":"46","text":"Courses","type":"control_dropdown"}]);}, 20); 
</script>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link rel="stylesheet" href="cssForm.css">
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.36571" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.36571" />
<style type="text/css" id="form-designer-style">
    /* Injected CSS Code */

      /*PREFERENCES STYLE*/
      /* NEW THEME STYLE */
      /* CSS */
      .button-62 {
        background: linear-gradient(to bottom right, #EF4765, #FF9A5A);
        border: 0;
        border-radius: 12px;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
        font-size:16px;
        font-weight: 500;
        line-height: 2.5;
        outline: transparent;
        padding: 0 1rem;
        text-align: center;
        text-decoration: none;
        transition: box-shadow .2s ease-in-out;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
      }
      .button-62:not([disabled]):focus {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
      }
      .button-62:not([disabled]):hover {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
      }
      .supernova {
        background-color: undefined;
      }
      .form-all {
        margin-top: 72px;
        background-color: undefined;
        box-shadow: undefined
      }
      .form-line-active {
        background-color: undefined;
      }
      .form-line-error {
        background-color: undefined;
      }
      .form-line-error input:not(#coupon-input):not(.form-validation-error) {
        border-color: undefined;
      }
      .form-label {
        color: undefined;
      }
      .form-sub-label {
        color: undefined;
      }
      .form-dropdown,
      .form-textarea,
      .form-textbox,
      .form-checkbox + label:before, .form-radio + label:before,
      .form-radio + span:before, .form-checkbox + span:before {
        border-color: undefined;
        background-color: undefined;
        color: undefined;
      }
      .rating-item label {
        border-color: undefined;
        color: undefined;
        background-color: undefined;
      }
      .rating-item-title.for-to > label:first-child,
      .rating-item-title.for-from > label:first-child {
        background-color: transparent;
        color: undefined;
      }
      .appointmentCalendarContainer .monthYearPicker .pickerItem+.pickerItem {
        border-left-color: undefined;
      }
      .appointmentCalendarContainer {
        background-color: undefined;
        border-color: undefined;
      }
      .appointmentCalendarContainer .currentDate,
      .appointmentCalendarContainer .pickerItem .pickerYear,
      .appointmentCalendarContainer .pickerItem .pickerMonth
      {
        color: undefined;
      }
      .appointmentCalendar .calendarDay {
        color: undefined;
    }
      .appointmentCalendarContainer .monthYearPicker{
        border-color: undefined;
      }
      .rating-item input:focus+label, .rating-item input:hover+label {
        color: undefined;
      }
      .appointmentCalendar .calendarDay.isUnavailable,
      ::placeholder {
        color: undefined;
      }
      .form-spinner-button-container > *,
      .appointmentDayPickerButton,
      .form-matrix-column-headers, .form-matrix-row-headers {
        background-color: undefined;
      }
      .appointmentCalendar .dayOfWeek {
        background-color: undefined;
        color: undefined;
      }
      .form-matrix-values {
        background-color: undefined;
      }
      .rating-item input:focus+label, .rating-item input:hover+label {
        color: undefined;
        background-color: undefined;
        border-color: undefined;
      }
      .rating-item input:checked+label {
        background-color: undefined;
        border-color:undefined;
        color: #fff;
      }
      .form-checkbox + label, .form-radio + label :not(.rating-item){
        color: undefined;
      }
      .form-dropdown:hover, .form-textarea:hover, .form-textbox:hover, .form-checkbox:hover + label:before, .form-radio:hover + label:before {
        border-color: undefined;
        box-shadow: undefined;
      }
      .form-dropdown:focus, .form-textarea:focus, .form-textbox:focus, .form-checkbox:focus + label:before, .form-radio:focus + label:before {
        border-color: undefined;
        box-shadow: undefined;
      }
      .form-matrix-column-headers, .form-matrix-table td, .form-matrix-table td:last-child, .form-matrix-table th, .form-matrix-table th:last-child, .form-matrix-table tr:last-child td, .form-matrix-table tr:last-child th, .form-matrix-table tr:not([role=group])+tr[role=group] th,
      .form-matrix-column-headers, .form-matrix-table td,
      .form-matrix-table td:last-child, .form-matrix-table th,
      .form-matrix-table th:last-child, .form-matrix-table tr:last-child td,
      .form-matrix-table tr:last-child th,
      .form-matrix-table tr:not([role=group])+tr[role=group] th
      {
        border-color: undefined;
        color: undefined;
      }
      .form-matrix-headers.form-matrix-column-headers,
      .isSelected .form-matrix-column-headers:nth-last-of-type(2) {
        border-color: undefined;
      }
      .form-radio:checked + label:after {
        background-color: undefined;
      }
      .form-checkbox:checked + label:before {
        background-color: undefined;
        border-color: undefined;
      }
      .form-radio:checked + label:before {
        border-color: undefined;
      }
      .form-header {
        color: undefined;
      }
      .jSignature, .signature-pad-passive {
        border-color: undefined;
      }
      .form-header-group .form-subHeader {
        color: undefined;
      }
      .form-header-group {
        border-color: undefined;
      }
      .header-large {
        color: undefined;
        border-color: undefined;
      }
      li[data-type="control_text"] .form-html {
        color: undefined;
      }
      li[data-type="control_datetime"] .extended .allowTime-container + .form-sub-label-container {
        background-color: undefined;
      }
      .submit-button {
        background-color: #6497b1;
        border-color: #005b96;
      }
      .form-sacl-button, form-submit-print {
        color: undefined;
      }
      .form-pagebreak-back {
        background-color: undefined;
        border-color: undefined;
      }
      .form-pagebreak-next {
        background-color: undefined;
      }
      .form-pagebreak, .form-pagebreak > div {
        border-color: undefined;
      }
      .form-buttons-wrapper, .form-pagebreak, .form-submit-clear-wrapper {
        border-color: undefined;
      }

      /* NEW THEME STYLE */
      /*PREFERENCES STYLE*/
      /*PREFERENCES STYLE*/
    .form-all {
      font-family: Inter, sans-serif;
    }
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-family: Inter, sans-serif;
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-family: Inter, sans-serif;
    }
    .form-header-group {
      font-family: Inter, sans-serif;
    }
    .form-label {
      font-family: Inter, sans-serif;
    }
  
    .form-label.form-label-auto {
      
    display: block;
    float: none;
    text-align: left;
    width: 100%;
  
    }
  
    .form-line {
      margin-top: 12px 36px 12px 36px px;
      margin-bottom: 12px 36px 12px 36px px;
    }
  
    .form-all {
      max-width: 752px;
      width: 100%;
    }
  
    .form-label.form-label-left,
    .form-label.form-label-right,
    .form-label.form-label-left.form-label-auto,
    .form-label.form-label-right.form-label-auto {
      width: 230px;
    }
  
    .form-all {
      font-size: 16px
    }
    .form-all .qq-upload-button,
    .form-all .qq-upload-button,
    .form-all .form-submit-button,
    .form-all .form-submit-reset,
    .form-all .form-submit-print {
      font-size: 16px
    }
    .form-all .form-pagebreak-back-container,
    .form-all .form-pagebreak-next-container {
      font-size: 16px
    }
  
    .supernova .form-all, .form-all {
      background-color: #fff;
      border: 1px solid transparent;
    }
  .form-all {
    color: #2C3345;
  }
  .form-label-top,
  .form-label-left,
  .form-label-right,
  .form-html,
  .form-checkbox-item label,
  .form-radio-item label {
    color: #2C3345;
  }
  
    .supernova {
      background-color: #ecedf3;
    }
    .supernova body {
      background: transparent;
    }
  
    .form-textbox,
    .form-textarea,
    .form-radio-other-input,
    .form-checkbox-other-input,
    .form-captcha input,
    .form-spinner input {
      background-color: #fff;
    }
  
      .supernova {
        height: 100%;
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
      }
      /* .supernova {
        background-image: url("//www.jotform.com/images/brushed.png");
      }
      #stage {
        background-image: url("//www.jotform.com/images/brushed.png");
      }
    
      .form-all {
        background-image: url("//www.jotform.com/images/brushed.png");
        background-repeat: repeat;
        background-attachment: scroll;
        background-position: center top;
      } */
    
  .ie-8 .form-all:before { display: none; }
  .ie-8 {
    margin-top: auto;
    margin-top: initial;
  }

  li{
    padding: 0px;
  }
  
  /*PREFERENCES STYLE*//*__INSPECT_SEPERATOR__*/
    /* Injected CSS Code */
</style>
  <form class="jotform-form" method="POST">
  <input type="hidden" name="formID" value="222959161741460" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <h1 id="header_1" class="form-header" data-component="header">
            PELUNASAN DIPERCEPAT CUSTOMER
          </h1>
        </div>
      </li>
      <li class="form-line" data-type="control_fullname" id="id_4">
        <label class="form-label form-label-top form-label-extended form-label-auto"> ID Pelanggan </label>
        <div id="cid_4" class="form-input-wide" data-layout="half">
          <div data-wrapper-react="true" class="extended">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input 
                type="tel"
                id="noIDPel" 
                name="noIDPel"
                class="mask-phone-number form-textbox validate[Fill Mask]"
                onkeypress="return /[0-9]/i.test(event.key)"
                maxlength="14" 
                <?php if (isset($_POST['cekIDPel'])) echo 'value="'.$_POST['noIDPel'].'"';?>
              />
          </div>
        </div>
      </li>
      <div style="padding-bottom: 25px;">
        <input class="button-62" type="submit" id="cekIDPel" name="cekIDPel" value="Cek ID Pelanggan">
      </div>
      <li class="form-line form-col-1" data-type="control_birthdate" id="id_24">
        <label class="form-label form-label-top" id="label_24" for="input_24"> Data Customer </label>
        <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px; margin-top:-10px; margin-bottom:10px;" aria-hidden="false"> (*) Wajib diisi jika bukan debitur </label>
        <div id="cid_24" class="form-input-wide" data-layout="full" style="margin-bottom: 10px;">
            <span class="form-sub-label-container" style="vertical-align:top">
                <input 
                    type="text"
                    id="namaDebitur" 
                    name="namaDebitur"
                    class="mask-phone-number form-textbox validate[Fill Mask]"
                    onkeypress="return /[A-Z]/i.test(event.key)"
                    <?php if (isset($_POST['cekIDPel'])) echo 'value="'.$_POST['noIDPel'].'"';?>
                />
                <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px;margin-bottom: 10px;" aria-hidden="false"> Nama Lengkap (Debitur) </label>
            </span>
            <div data-wrapper-react="true" style="margin-bottom: 10px;">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <input 
                        type="text"
                        id="namaCust" 
                        name="namaCust"
                        class="mask-phone-number form-textbox validate[Fill Mask]"
                        onkeypress="return /[A-Z]/i.test(event.key)"
                        <?php if (isset($_POST['cekIDPel'])) echo 'value="'.$_POST['noIDPel'].'"';?>
                    />
                    <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Nama Lengkap (Selain Debitur / Pihak Ketiga) * </label>
                </span>
                <span class="form-sub-label-container" style="vertical-align:top">
                    <input 
                        type="text"
                        id="hubungan" 
                        name="hubungan"
                        class="mask-phone-number form-textbox validate[Fill Mask]"
                        maxlength="25" 
                        <?php if (isset($_POST['cekIDPel'])) echo 'value="'.$_POST['noIDPel'].'"';?>
                    />
                    <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Hubungan Dengan Debitur * </label>
                </span>
            </div>
            <div data-wrapper-react="true" style="margin-bottom: 10px;">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <input 
                        type="text"
                        id="alamat" 
                        name="alamat"
                        class="mask-phone-number form-textbox validate[Fill Mask]"
                        <?php if (isset($_POST['cekIDPel'])) echo 'value="'.$_POST['noIDPel'].'"';?>
                    />
                    <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Alamat </label>
                </span>
                <span class="form-sub-label-container" style="vertical-align:top">
                    <input 
                        type="tel"
                        id="noTelp" 
                        name="noTelp"
                        class="mask-phone-number form-textbox validate[Fill Mask]"
                        onkeypress="return /[0-9]/i.test(event.key)"
                        maxlength="12" 
                        <?php if (isset($_POST['cekIDPel'])) echo 'value="'.$_POST['noIDPel'].'"';?>
                    />
                    <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Nomor Telepon </label>
                </span>
            </div>
            <div data-wrapper-react="true" style="margin-bottom: 10px;">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <input 
                        type="text"
                        id="pekerjaan" 
                        name="pekerjaan"
                        class="mask-phone-number form-textbox validate[Fill Mask]"
                        <?php if (isset($_POST['cekIDPel'])) echo 'value="'.$_POST['noIDPel'].'"';?>
                    />
                    <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Pekerjaan </label>
                </span>
                <span class="form-sub-label-container" style="vertical-align:top">
                    <input 
                        type="text"
                        id="namaPerusahaan" 
                        name="namaPerusahaan"
                        class="mask-phone-number form-textbox validate[Fill Mask]"
                        <?php if (isset($_POST['cekIDPel'])) echo 'value="'.$_POST['noIDPel'].'"';?>
                    />
                    <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Nama Perusahaan </label>
                </span>
            </div>
            <div data-wrapper-react="true" style="margin-bottom: 10px;">
                <span class="form-sub-label-container" style="vertical-align:top">
                    <input 
                        type="text"
                        id="alasanPelunasan" 
                        name="alasanPelunasan"
                        class="mask-phone-number form-textbox validate[Fill Mask]"
                        <?php if (isset($_POST['cekIDPel'])) echo 'value="'.$_POST['noIDPel'].'"';?>
                    />
                    <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Alasan Pelunasan </label>
                </span>
                <span class="form-sub-label-container" style="vertical-align:top">
                    <input 
                        type="text"
                        id="sumberDanaPelunasan" 
                        name="sumberDanaPelunasan"
                        class="mask-phone-number form-textbox validate[Fill Mask]"
                        <?php if (isset($_POST['cekIDPel'])) echo 'value="'.$_POST['noIDPel'].'"';?>
                    />
                    <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Sumber Dana Pelunasan </label>
                </span>
            </div>
        </div>
      </li>
      <li class="form-line form-col-1" data-type="control_birthdate" id="id_24">
        <label class="form-label form-label-top" id="label_24" for="input_24"> Total Pembayaran Pelunasan </label>
        <div id="cid_24" class="form-input-wide" data-layout="full" style="margin-bottom: 10px;">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="tel" id="totalPelunasan" name="totalPelunasan" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue="" autoComplete="section-input_27 tel-national" data-masked="true" value="" placeholder="Rp." data-component="phone" aria-labelledby="label_27" />
              <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Total Pembayaran Pelunasan </label>
            </span>
          </div>
        </div>
      </li>
      <li class="form-line form-col-1" data-type="control_birthdate" id="id_24">
        <label class="form-label form-label-top" id="label_24" for="input_24"> Lampirkan Identitas Pembayar </label>
        <div id="cid_24" class="form-input-wide" data-layout="full" style="margin-bottom: 10px;">
          <div data-wrapper-react="true">
            <span class="form-sub-label-container" style="vertical-align:top">
              <input type="file" id="IDPembayar" name="IDPembayar" data-type="mask-number" class="mask-phone-number form-textbox validate[Fill Mask]" data-defaultvalue="" autoComplete="section-input_27 tel-national" data-masked="true" value="" placeholder="Rp." data-component="phone" aria-labelledby="label_27" />
              <label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false"> Identitas Pembayar </label>
            </span>
          </div>
        </div>
      </li>
      <div style="padding-bottom: 25px; margin-left:-10px;">
        <input class="form-submit-button submit-button jf-form-buttons jsTest-submitField" type="submit" id="submitButton" name="submitButton" value="Submit" onclick="validateAllData()">
      </div>
    </ul>
  </div>  

  <script type="text/javascript">

    function validateAllData() {
      document.cookie = "validateData=gagal"
      while (true) {
        var getRebateRate = document.getElementById("rebateRate").value;
        if (getRebateRate == "kosong") {
            sweetAlert('Gagal', 'Rebate Rate tidak boleh kosong', 'error');
            break
        }
        document.cookie = "validateData=berhasil"        
        break
      }
    }

    function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
    
    var totalPelunasan = document.getElementById('totalPelunasan');
		totalPelunasan.addEventListener('keyup', function(e){
			totalPelunasan.value = formatRupiah(this.value, 'Rp. ');
		});
  </script>
</form>
<script src="https://cdn.jotfor.ms//js/vendor/smoothscroll.min.js?v=3.3.36571"></script>
<script src="https://cdn.jotfor.ms//js/errorNavigation.js?v=3.3.36571"></script>

<?php
  if(isset($_POST['cekNoCust'])) {
    function callAPI($method, $url, $data) {
      $curl = curl_init();
      switch ($method) {
        case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
        case "PUT":
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
        default:
          if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
      }
      // OPTIONS:
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array (
        'User: Anonymous',
        'Content-Type: application/json',
      ));
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      // EXECUTE:
      $result = curl_exec($curl);
      if(!$result) {
        die("Connection Failure");
      }
      curl_close($curl);
      return $result;
    }

    $getLoginName = $username;
    $getMenu = "Insert";
    $getFunction = "Cek_102_No_Cust";
    $getNoCustKontrak = $_POST['noCustKontrak'];

    
    $data_array =  array('LoginUser'=>$getLoginName, 'Menu'=>$getMenu, 'Function'=>$getFunction, '102_No_Cust'=>$getNoCustKontrak);

    $make_call = callAPI('POST', '192.168.188.1:8123/CmdCusfin', json_encode($data_array));

    $response = json_decode($make_call, true);

    if($response['DATA']['02_nama_konsumen'] != '') {
      $namaCustomer = $response['DATA']['02_nama_konsumen'];
      $noKtpCustomer  = $response['DATA']['03_no_ktp'];
      echo "<script>sweetAlert('Sukses!','Nama customer adalah $namaCustomer dengan no KTP $noKtpCustomer','success')</script>";
    }
    else {
      echo "<script>sweetAlert('Gagal!','Nomor Customer Tidak Ditemukan!','error')</script>";
      //echo "<script>window.open('testCusfin','_self')</script>";
    }
  }
  
  if(isset($_POST['submitButton']) && $_COOKIE['validateData'] == 'berhasil') {
    function callAPI($method, $url, $data) {
      $curl = curl_init();
      switch ($method) {
        case "POST":
          curl_setopt($curl, CURLOPT_POST, 1);
          if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
        case "PUT":
          curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
          if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
          break;
        default:
          if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
      }
      // OPTIONS:
      curl_setopt($curl, CURLOPT_URL, $url);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array (
        'User: Anonymous',
        'Content-Type: application/json',
      ));
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
      // EXECUTE:
      $result = curl_exec($curl);
      if(!$result) {
        die("Connection Failure");
      }
      curl_close($curl);
      return $result;
    }

    if($username == "") {
      $getLoginName = "session";
    }
    else {
      $getLoginName = $username;
    }
    $getMenu = "Insert";
    $getFunction = "Done";
    $getTglKontrak = str_replace("-", "", $_POST['tglKontrak']);
    $getNoCustKontrak = $_POST['noCustKontrak'];
    $getCabangKontrak = $_POST['cabangKontrak'];
    $getKodeKontrak = $_POST['kodeKontrak'];
    if($getKodeKontrak == "E" || $getKodeKontrak == "F") {
      $getBpkbPosition = $_POST['bpkbPosition'];
      $getPositionDate = str_replace("-", "", $_POST['positionDate']);
      $getDocNumber = $_POST['docNumber'];
    }
    else {
      $getBpkbPosition = " ";
      $getPositionDate = " ";
      $getDocNumber = " ";
    }
    $getGabungan = "";
    $getIndustry = $_POST['industry'];
    $getNilaiAsetFormat = substr($_POST['nilaiAset'], 4);  
    $getNilaiAset = str_replace(".", "", $getNilaiAsetFormat);

    $getBiayaLainnyaFormat = substr($_POST['biayaLainnya'], 4); 
    $getBiayaLainnya = str_replace(".", "", $getBiayaLainnyaFormat);

    $getUangMukaFormat = substr($_POST['uangMuka'], 4); 
    $getUangMuka = str_replace(".", "", $getUangMukaFormat);

    $getAsuransiTunaiFormat = substr($_POST['asuransiTunai'], 4); 
    $getAsuransiTunai = str_replace(".", "", $getAsuransiTunaiFormat);

    $getDiscAngsuranFormat = substr($_POST['discAngsuran'], 4); 
    $getDiscAngsuran = str_replace(".", "", $getDiscAngsuranFormat);

    $getLamaKredit = $_POST['lamaKredit'];
    $getPaymentTerms = "01";
    $getAdvArv = $_POST['advArv'];
    $getInType = $_POST['inType'];

    $getFlatRate = str_replace("%", "", $_POST['flatRate']);
    $getDecliningRate = str_replace("%", "", $_POST['decliningRate']);
    $getOverdueRate = str_replace("%", "", $_POST['overdueRate']);
    $getRebateRate = str_replace("%", "", $_POST['rebateRate']);

    $getRentalAmountFormat = substr($_POST['rentalAmount'], 4); 
    $getRentalAmount = str_replace(".", "", $getRentalAmountFormat);
    
    $getBiayaAdmFormat = substr($_POST['biayaAdm'], 4); 
    $getBiayaAdm = str_replace(".", "", $getBiayaAdmFormat);
    
    $getAsuransiFormat = substr($_POST['asuransi'], 4); 
    $getAsuransi = str_replace(".", "", $getAsuransiFormat);
    
    $getStnkFormat = substr($_POST['stnk'], 4); 
    $getStnk = str_replace(".", "", $getStnkFormat);

    $getDcollection = str_replace("-", "", $_POST['dcollection']);
    $getSurvCode = $_POST['survCode'];
    $getPaidWith = $_POST['paidWith'];
    $getBuatan = $_POST['buatan'];
    $getMerek = $_POST['merek'];
    
    $getType = $_POST['type'];
    $getWarna = $_POST['warna'];
    $getNoChasis = $_POST['noChasis'];
    $getNoEngine = $_POST['noEngine'];
    $getBpkbName = $_POST['bpkbName'];
    $getBpkbAddr = $_POST['bpkbAddr'];
    $getAgunan = $_POST['agunan'];
    $getOrderNo = $_POST['orderNo'];
    $getOrderDate = str_replace("-", "", $_POST['orderDate']);
    $getDeliveryNo = $_POST['deliveryNo'];
    
    $getDeliveryDate = str_replace("-", "", $_POST['deliveryDate']);
    $getCategory = $_POST['category'];
    $getCondition = $_POST['condition'];
    $getVehicleYear = $_POST['vehicleYear'];
    $getBiType = $_POST['biType'];
    $getSuppCode = $_POST['suppCode'];
    $getNoBpkb = $_POST['noBpkb'];
    $getSalesSupl = $_POST['salesSupl'];
    $getSupvSupl = $_POST['supvSupl'];
    $getPoliceNo = $_POST['policeNo'];

    $getAgunanNo = $_POST['agunanNo'];
    $getBpkbRecDate = $_POST['bpkbRecDate'];
    $getBpkbIssuedDate = $_POST['bpkbIssuedDate'];
    $getRemark = $_POST['remark'];

    $asuransi = $_POST['asuransiStat'];  
    if ($asuransi == "Y") {
      $getPeriodeDari = str_replace("-", "", $_POST['periodeDari']);
      $getPeriodeSampai = str_replace("-", "", $_POST['periodeSampai']);
      $getTanggunganSatu = $_POST['tanggunganSatu'];
      $getTanggunganDua = $_POST['tanggunganDua'];
      $getTanggunganTiga = $_POST['tanggunganTiga'];
      $getTanggunganEmpat = $_POST['tanggunganEmpat'];
      $getTanggunganLima = $_POST['tanggunganLima'];
      $getTanggunganEnam = $_POST['tanggunganEnam'];
      $getTjh = $_POST['tjh'];
      $getTsi = $_POST['tsi'];
      $getTsiDriver = $_POST['tsiDriver'];
      $getTsiPassenger = $_POST['tsiPassenger'];
    }
    else {
      $getPeriodeDari = " ";
      $getPeriodeSampai = " ";
      $getTanggunganSatu = " ";
      $getTanggunganDua = " ";
      $getTanggunganTiga = " ";
      $getTanggunganEmpat = " ";
      $getTanggunganLima = " ";
      $getTanggunganEnam = " ";
      $getTjh = " ";
      $getTsi = " ";
      $getTsiDriver = " ";
      $getTsiPassenger = " ";
    }

    
    $data_array =  array('LoginUser'=>$getLoginName, 'Menu'=>$getMenu, 'Function'=>$getFunction, '101_con_date'=>$getTglKontrak, '102_no_cust'=>$getNoCustKontrak, '103_kotacom'=>$getCabangKontrak, '104_jenkon'=>$getKodeKontrak, '105_gabungan'=>$getGabungan, '106_industry'=>$getIndustry, '107_ass_cost'=>$getNilaiAset, '108_admothers'=>$getBiayaLainnya, '109_dp'=>$getUangMuka, '110_dp_asr'=>$getAsuransiTunai, '111_disang'=>$getDiscAngsuran, '112_terms'=>$getLamaKredit, '113_avdarr'=>$getAdvArv, '114_intype'=>$getInType, 

    '201_cfr'=>$getFlatRate, '202_cdr'=>$getDecliningRate, '203_codr'=>$getOverdueRate, '204_crr'=>$getRebateRate, '205_cam'=>$getRentalAmount, 
    
    '301_admfee'=>$getBiayaAdm, '302_insurance'=>$getAsuransi, '303_stnkfee'=>$getStnk, '304_dcollectio'=>$getDcollection, '305_surv_code'=>$getSurvCode, '306_pay'=>$getPaidWith,
    
    '401_made'=>$getBuatan, '402_brand'=>$getMerek, '403_tipe'=>$getType, '404_colour'=>$getWarna, '405_no_chassi'=>$getNoChasis, '406_no_engine'=>$getNoEngine,'407_bpkb_nama'=>$getBpkbName, '408_bpkb_almt'=>$getBpkbAddr, '409_ket_agun'=>$getAgunan, 
    
    '501_ord_no'=>$getOrderNo, '502_orde_date'=>$getOrderDate, '503_drv_no'=>$getDeliveryNo, '504_dlvry_date'=>$getDeliveryDate, 
    
    '601_category'=>$getCategory, '602_kondisi'=>$getCondition, '603_thn_pakai'=>$getVehicleYear, '604_ketbidus'=>$getBiType, '605_supplier'=>$getSuppCode, '606_no_bpkb'=>$getNoBpkb, '607_salesman'=>$getSalesSupl, '608_supervisor'=>$getSupvSupl,
    
    '701_no_stnk'=>$getPoliceNo, '702_no_agun'=>$getAgunanNo, '703_bpkb_rec'=>$getBpkbRecDate, '704_bpkb_isu'=>$getBpkbIssuedDate, '705_catatan'=>$getRemark, '706_datasur'=>$asuransi, '707_posisi'=>$getBpkbPosition, '708_posdate'=>$getPositionDate, '709_docnumber'=>$getDocNumber,
    
    '801_tawaltang'=>$getPeriodeDari, '802_takhirtang'=>$getPeriodeSampai, '803_jtangth1'=>$getTanggunganSatu, '804_jtangth2'=>$getTanggunganDua, '805_jtangth3'=>$getTanggunganTiga, '806_jtangth4'=>$getTanggunganEmpat, '807_jtangth5'=>$getTanggunganLima, '808_jtangth6'=>$getTanggunganEnam, '809_tjh'=>$getTjh, '810_tsi'=>$getTsi, '811_tsi_supir'=>$getTsiDriver,'812_tsi_pnmpng'=>$getTsiPassenger);

    $make_call = callAPI('POST', '192.168.188.1:8123/CmdCusfin', json_encode($data_array));

    $response = json_decode($make_call, true);

    if($response['SUCCESS']['keterangan'] == 'trx berhasil') {
      $noKontrak = $response['SUCCESS']['no_kontrak'];
      echo "<script>sweetAlert('Sukses!','Customer finance telah tersimpan dengan nomor kontrak $noKontrak','success')</script>";
    }
    else {
      echo "<script>sweetAlert('Gagal!','Error saat menyimpan data!','error')</script>";
    }

  }
?>