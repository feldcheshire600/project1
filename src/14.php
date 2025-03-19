 <?php
 
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 
 $to = 'your_email@example.com';
 $subject = 'New Message from Website Contact Form';
 $body = "You have received a new message from the website's contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
 
 mail($to, $subject, $body);
 echo "Message sent!";
 ?>