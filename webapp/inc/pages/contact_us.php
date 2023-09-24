<div id="summaryarea">
    <ul id="sub_quicklinks">
        <li><!-- no links --></li>
    </ul>
    <h1 class="mainheading">Reach Us <span>Anytime...</span></h1>

    <div id="summaryarea_inner_full">

        <div class="two_columns">
            <div class="column column-left">

                <ul class="expanded_list">
                    <li><strong>Office Timings</strong>: 9AM to 9PM EST Mondays - Fridays</li>
                    <li><strong>Holidays</strong>: All US National Holidays</li>
                    <li>Crea8ive Designs is here 24 hours a day, 7 days a week to serve you</li>
                </ul>

            </div>


            <div class="column column-right">

                <div class="doubleround smalldoubleround" id="livetalk">
                    <div class="doubleround-top">

                        <div class="alignLeft">
                            <h2>Need to talk live?</h2>
                        </div>
                        <div class="alignRight">
                            <small>(Add directly at Messenger)</small>
                        </div>

                    </div>
                    <div class="doubleround-body">

                        <ul class="contact_list">
                            <li class="gmail borderx"><a href="mailto:crea8ivedesigns@gmail.com">crea8ivedesigns@gmail.com</a></li>
                            <li class="skype"><a href="skype:Tonic.Michal?call">Tonic.Micheal</a></li>
                        </ul>

                    </div>
                    <div class="doubleround-bottom"></div>
                </div>

            </div>
        </div>

    </div>
</div>

<div id="main_body">
    <div id="main_body_container">


        <div class="doubleround">
            <div class="doubleround-top">

                <h2>Contact Form</h2>

            </div>
            <div class="doubleround-body">
                <div class="doubleround-body-inner">

                    <div id="errors"></div>

                    <form class="adminForm" id="ticketForm" enctype="multipart/form-data" method="post" action="/web/20120712211708/http://www.crea8ivedesign.com/tickets/index/contact_us" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>
                        <ul class="form">
                            <li>
                                <label for="TicketFirstName">First Name</label>                                                            <div class="form-hint">

                                </div>
                                <input name="data[Ticket][first_name]" type="text" class="text input" id="TicketFirstName">                                                        </li>

                            <li>
                                <label for="TicketLastName">Last Name</label>                                                            <div class="form-hint">

                                </div>
                                <input name="data[Ticket][last_name]" type="text" class="text input" id="TicketLastName">                                                        </li>

                            <li class="clearfix"></li>

                            <li>
                                <label for="TicketEmail">Email Address</label>                                                            <div class="form-hint">

                                </div>
                                <input name="data[Ticket][email]" type="text" class="text input" id="TicketEmail">                                                        </li>

                            <li>
                                <label for="TicketPhone">Phone Number</label>                                                            <div class="form-hint">

                                </div>
                                <input name="data[Ticket][phone]" type="text" class="text input" id="TicketPhone">                                                        </li>

                            <li class="fullwidth">
                                <label for="TicketInterest">Interest</label>                                                            <div class="form-hint">

                                </div>
                                <select name="data[Ticket][interest]" class="selectbox" id="TicketInterest">
                                    <option value=""></option>
                                    <option value="Logo Design">Logo Design</option>
                                    <option value="Broucher Desgin">Broucher Desgin</option>
                                    <option value="Illustration Design">Illustration Design</option>
                                    <option value="Web Design">Web Design</option>
                                </select>                                                        </li>

                            <li class="fullwidth" style="width:800px">
                                <label for="TicketEnquiry">Enquiry</label>                                                            <div class="form-hint">

                                </div>
                                <textarea name="data[Ticket][enquiry]" options="" class="textbig" rows="6" cols="58" id="TicketEnquiry"></textarea>                                                        </li>

                            <li class="fullwidth">
                                <label for="TicketCaptcha">Enter Word Verification in box below *</label>                                                        	<br>
                                <img src="/web/20120712211708im_/http://www.crea8ivedesign.com/tickets/captcha" alt="">                                                        </li>

                            <li>

                                <div class="absNote">

                                </div>
                                <input name="data[Ticket][captcha]" type="text" class="text input" id="TicketCaptcha">
                            </li>

                            <li>
                                <input type="file" name="data[Ticket][attachment]" class="text input" id="TicketAttachment">                                                        	<div class="absNote">Attach File (2MB Limit) </div>
                            </li>



                            <li class="fullwidth centerx">
                                <input type="image" src="/web/20120712211708im_/http://www.crea8ivedesign.com/img/submit_email.png" alt="Email" class="pngfix">
                            </li>

                        </ul>


                    </form>
                </div>
            </div>
            <div class="doubleround-bottom"></div>
        </div>


        <div class="bigspace"></div>

        <?php component('gurrante'); ?>

    </div><!-- end of body container -->
</div>
