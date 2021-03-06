<?php
defined('_JEXEC') or die;
$contact_img = $this->contact->image;
$email = $this->contact->email_to;
$telephone = $this->contact->telephone;
$address = $this->contact->address;
$mobile = $this->contact->mobile;
$webpage = $this->contact->webpage;
?>
<div class="mainwidth container">
    <div class="section-title text-center">
        <div>
            <span class="line big"></span>
            <span class="line big"></span>
        </div>
        <h1 class="item_right letter">Liên hệ</h1>
        <div>
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>
    <div class="blog_left col-lg-6 col-md-6 col-xs-12">
        <div class="contact_form margin_bottom_30 clearfix">
            <div class="row">

                <div class="col-md-12">
                    <span class="contact_title_com"><strong style="font-size: 20px;">Công ty TNHH Herbal Nutrition Care ATD</strong></span>
                    <br>
                    <i class="fa fa-map-marker" aria-hidden="true"></i> Số 305/8 Đường Tân Sơn Nhì, P Tân Sơn Nhì, Quận
                    Tân Phú, TP HCMC
                    <br>
                    <div class="phone"><span><i class="fa fa-phone" aria-hidden="true"></i> 08 5408 6690 </span></div>   <br>
                    <i class="fa fa-fax" aria-hidden="true"></i> 08 5408 6695   <br>
                    <div class="phone"><i class="fa fa-mobile" aria-hidden="true"></i>&nbsp&nbsp&nbsp0902 399 560 </div><br>
                    <i class="fa fa-envelope-open" aria-hidden="true"></i> info@dongtrunghathaotruongsinh.vn
                </div>


                <div class="contact_form_submit col-lg-12 col-md-12 col-xs-12">
                    <div class="send_messenger_title">GỬI THÔNG TIN LIÊN HỆ</div>
                    <ul>
                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <input name="ctl00$MainContent$Txt_Name" type="text" id="MainContent_Txt_Name"
                                   class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Họ &amp; tên*">
                            <input name="ctl00$MainContent$Txt_Email" type="text" id="MainContent_Txt_Email"
                                   class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Email*">
                            <input name="ctl00$MainContent$Txt_Phone" type="text" id="MainContent_Txt_Phone"
                                   class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Điện thoại*">
                        </li>
                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <textarea name="ctl00$MainContent$Txt_Comment" id="MainContent_Txt_Comment" class="content"
                                      placeholder="Nội dung*"></textarea>
                            <input type="submit" name="ctl00$MainContent$Bnt_Send" value="Gửi đi"
                                   id="MainContent_Bnt_Send" class="button_send">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_right col-lg-4 col-md-4 col-xs-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1929891744603!2d106.62877371480094!3d10.796526192307866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf8e086b57db240aa!2sC%C3%B4ng+ty+TNHH+Herbal+Nutrition+Care+ATD!5e0!3m2!1sen!2s!4v1480242415869" width="556" height="338" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>