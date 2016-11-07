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
    <div class="banner_page margin_bottom_24">
        <a href="#">
            <img class="img-responsive" alt="In offset" src="<?php echo $contact_img; ?>" title="In offset">
        </a>
    </div>
    <div class="blog_left col-lg-6 col-md-6 col-xs-12">
        <div class="contact_form margin_bottom_30 clearfix">
            <div class="row">
                <div class="contact_form_title col-lg-12 col-md-12 col-sm-12 col-xs-12">Liên hệ</div>
                <div class="Contact_Info col-lg-12 col-md-12 col-xs-12">
                    <table width="100%">
                        <tr>
                            <td colspan="2">
                                <b>ĐỊA CHỈ</b> : 34/10 Bàu Cát 2, P14, Q.Tân Bình, TP.HCM
                            </td>
                        </tr>
                        <tr>
                            <td width="350"><b>ĐIỆN THOẠI</b> : (08). 6292 4282 </td>
                            <td><b>FAX</b> : (08). 3949 2357</td>
                        </tr>
                        <tr>
                            <td><b>HOTLINE</b> : 0902 399 560 </td>
                            <td><b>EMAIL</b> : bayhien@gmail.com</td>
                        </tr>
                    </table>
                </div>

                <div class="contact_form_submit col-lg-12 col-md-12 col-xs-12">
                    <div class="send_messenger_title">GỬI THÔNG TIN LIÊN HỆ</div>
                    <ul>
                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <input name="ctl00$MainContent$Txt_Name" type="text" id="MainContent_Txt_Name" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Họ &amp; tên*">
                            <input name="ctl00$MainContent$Txt_Email" type="text" id="MainContent_Txt_Email" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Email*">
                            <input name="ctl00$MainContent$Txt_Phone" type="text" id="MainContent_Txt_Phone" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" placeholder="Điện thoại*">
                        </li>
                        <li class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <textarea name="ctl00$MainContent$Txt_Comment" id="MainContent_Txt_Comment" class="content" placeholder="Nội dung*"></textarea>
                            <input type="submit" name="ctl00$MainContent$Bnt_Send" value="Gửi đi" id="MainContent_Bnt_Send" class="button_send">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="blog_right col-lg-4 col-md-4 col-xs-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.2494491019675!2d106.64263331480088!3d10.792196992310858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43ab640636c90d03!2sC%C3%B4ng+Ty+TNHH+MTV+TM+DV+T%C3%B9ng+Khoa+-+Inkythuatso.top!5e0!3m2!1sen!2s!4v1474170951730" width="556" height="338" frameborder="0" style="border:0" allowfullscreen>
        </iframe>
    </div>
</div>