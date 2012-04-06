<?php
/*
  Template Name: Contact Page
 */

get_header();
?>

<div id="primaryContent">
    <div class="post">

        <h1 class="postTitle page">send us a message!</h1>
        
        <div style="clear:both"></div>
        <div id="contact-form-container"><form id="contact-form" class="contact-form" action=" " method="post">
                <div id="contact-form-left"><label class="iconic user" for="username"> Name <span class="required">*</span></label><br />
                    <input id="username" type="text" name="username" placeholder="What can we call you?"/>
                    <br />
                    <label class="iconic mail-alt" for="usermail"> E-mail address <span class="required">*</span></label><br/>
                    <input id="usermail" type="email" name="usermail" placeholder="Trust me, we hate spam as much as you do." />
                    <br />
                    <label class="iconic location" for="userlocation"> Location </label><br />
                    <input id="usersite" type="text" name="userlocation" placeholder="Where is this all going down?"/>
                    <br />
                    <label class="iconic date" for="userdate"> Event Date </label><br />
                    <input id="userdate" type="date" name="userdate" placeholder="...and when?"/>

                </div>
                <div id="contact-form-right"><label class="iconic quote-alt" for="subject"> Subject </label><br />
                    <input id="subject" type="text" name="subject" placeholder="What's this all about?" />
                    <br />
                    <label class="iconic comment" for="message"> Message <span class="required">*</span></label><br />
                    <textarea placeholder="Don't be shy!  Tell us a little bit about your event, what you're looking for from a photobooth company, or just be nice and say hi!" id="message"></textarea>

                </div>
                <div style="clear: both;"></div>
                
                <label class="iconic referrer" for="userdate"> How did you find out about us? </label><br />
                <div class="style-select">
                    <select id="referrer">
                        <option value="Google">Google</option>
                        <option value="Facebook">Facebook</option>
                        <option value="WeddingWire">WeddingWire</option>
                        <option value="Craig's List">Craigslist</option>
                        <option value="From a Friend">From a Friend</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                
                <p class="indication">All fields with a <span class="required">*</span> are required</p>
                <input type="submit" value="Send your message !" />

            </form></div>

    </div>
</div>


<?php
get_footer();
?>
