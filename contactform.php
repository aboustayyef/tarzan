
<?php
  $to='mustapha.hamoui@gmail.com';
  $messageSubject='[Tarzan Contact Form]';
  $confirmationSubject='Message sent';
  $confirmationBody="Your message to Tarzan Ent. Ltd. has been received. We will get back to you as soon as possible";
  $email='';
  $body='';
  $displayForm=true;
  if ($_POST){
    $email=stripslashes($_POST['email']);
    $body=stripslashes($_POST['body']);
    // validate e-mail address
    $valid=eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$',$email);
    $crack=eregi("(\r|\n)(to:|from:|cc:|bcc:)",$body);
    if ($email && $body && $valid && !$crack){
      if (mail($to,$messageSubject,$body,'From: '.$email."\r\n")
          && mail($email,$confirmationSubject,$confirmationBody.$body,'From: '.$to."\r\n")){
        $displayForm=false;
?>

<div class="alert alert-success">
  Your message was successfully sent.
  In addition, a confirmation copy was sent to your e-mail address.
  Your message is shown below.
</div>
<?php
        echo '<p>'.htmlspecialchars($body).'</p>';
      }else{ // the messages could not be sent
?>
<div class="alert alert-error">
  Something went wrong when the server tried to send your message.
  This is usually due to a server error, and is probably not your fault.
  We apologise for any inconvenience caused.
</div>
<?php
      }
    }else if ($crack){ // cracking attempt
?>
<div class="alert alert-error">
  Your message contained e-mail headers within the message body.
  This seems to be a cracking attempt and the message has not been sent.
</div>
<?php
    }else{ // form not complete
?>
<div class="alert alert-error">
  <strong>Your message could not be sent. You must include both a valid e-mail address and a message.</strong>
</div>
<?php
    }
  }
  if ($displayForm){
?>
<!-- <form action="URL" method="post">
  <table>
    <tr>
      <td class="label"><label for="email">Your e-mail address</label></td>
      <td>
        <input type="text" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" size="30">
        (a confirmation e-mail will be sent to this address)
      </td>
    </tr>
    <tr>
      <td class="label"><label for="body">Your message</label></td>
      <td><textarea name="body" id="body" cols="70" rows="5">
        <?php echo htmlspecialchars($body); ?>
      </textarea></td>
    </tr>
    <tr><td id="submit" colspan="2"><button type="submit">Send message</button></td></tr>
  </table>
</form> -->


<form action = "<?php echo $_SERVER['PHP_SELF'] ;?>" method ="post">
  <label>Your email address</label>
  <input type="text" placeholder="youremail@sample.com" class="input-xlarge" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
  <label>Message</label>
  <textarea name="body" id="body" type="" class="" style="margin: 0px; width: 420px; height: 240px; "> </textarea>
  <p style ="margin-top:1em;"><button type="submit" class="btn">Submit</button></p>
</form>

<p>Important: by clicking "submit", you are sending us an email that will be read by a staff member as soon as possible. Please do not send unsolicited material, promotions or requests.</p><p>If this is a time sensitive matter, consider calling us during business hours on 0302 662234</p>



<?php
  }
?>