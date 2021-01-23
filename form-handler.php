<?php
$errors = '';
$myemail = 'info@antiochfc.org';
if(empty($_POST['name'])  || 
   empty($_POST['email']))
{
    $errors .= "\n Error: Name and email fields are required";
}
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$ep1 = $_POST['ep1'];
$ep2 = $_POST['ep2']; 
$ep3 = $_POST['ep3']; 
$ep4 = $_POST['ep4'];
$ep5 = $_POST['ep5'];
$sl1 = $_POST['sl1'];
$sl2 = $_POST['sl2'];
$sl3 = $_POST['sl3'];
$sl4 = $_POST['sl4'];
$sl5 = $_POST['sl5'];
$sl6 = $_POST['sl6'];
$sl7 = $_POST['sl7'];
$cg1 = $_POST['cg1'];
$cg2 = $_POST['cg2'];
$cg3 = $_POST['cg3'];
$cg4 = $_POST['cg4'];
if(empty($_POST['cg5']))
{
    $cg5 = "None selected";
}
else
{
    $cg5 = implode(', ', $_POST['cg5']);
}
$cg6 = $_POST['cg6'];
$wc1 = $_POST['wc1'];
$wc2 = $_POST['wc2'];
$wc3 = $_POST['wc3'];
$wc4 = $_POST['wc4'];
$wc5 = $_POST['wc5'];
$wc6 = $_POST['wc6'];
if(empty($_POST['wc7']))
{
    $wc7 = "None selected";
}
else
{
    $wc7 = implode(', ', $_POST['wc7']);
}
$wc8 = $_POST['wc8'];
$ie1 = $_POST['ie1'];
$ie2 = $_POST['ie2'];
$ie3 = $_POST['ie3'];
$ie4 = $_POST['ie4'];
$ie5 = $_POST['ie5'];
$ie6 = $_POST['ie6'];
$ie7 = $_POST['ie7'];
$sd1 = $_POST['sd1'];
$sd2 = $_POST['sd2'];
$sd3 = $_POST['sd3'];
$sd4 = $_POST['sd4'];
$sd5 = $_POST['sd5'];
$dq1 = $_POST['dq1'];
$dq2 = $_POST['dq2'];
$dq3 = $_POST['dq3'];
$dq4 = $_POST['dq4'];


if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}



if( empty($errors))

{

$to = $email_address;

$email_subject = "Discipleship Kick Start: $name";
$email_body = "You have received a new Discipleship Kick Start report from $name. ".
"\n\nLegend:\n1 - Never True\n2 - Occasionally True\n3 - Usually True\n4 - Always True".
"\n\nHere are the details:\n\n".
"*Enduring Passion*\n1. It is easy to receive God's love for me - $ep1".
"\n2. I feel the Holy Spirit convicting me of sin and I know how to respond - $ep2".
"\n3. When I feel stuck in my relationship with Jesus, I seek help from others - $ep3".
"\n4. Hearing God is a normal part of my every day - $ep4".
"\n5. Description of FaceTimes: \n$ep5".
"\n\n*Selfless Love*\n1. I often step outside my comfort zone to show God's love with words and actions - $sl1".
"\n2. I consistently feel God leading me when I minister to others - $sl2".
"\n3. I feel equipped to share the Gospel with others - $sl3".
"\n4. I feel confident sharing the Gospel with others - $sl4".
"\n5. I actively look for opportunities to share the Gospel in my sphere of influence - $sl5".
"\n6. I feel burdened for the lost in other nations - $sl6".
"\n7. These are the people in my sphere of influence:\n$sl7".
"\n\n*Courageous Generosity*\n1. I give at least 10% of my income to my church - $cg1".
"\n2. I give to missions and other needs in my church community - $cg2".
"\n3. I give to other ministries and organizations outside of my church community - $cg3".
"\n4. I give even when I do not see how I will be provided for - $cg4".
"\n5. I find joy in sacrificing my ______ for others: $cg5".
"\n6. What do you want generosity to look like in your life?\n$cg6".
"\n\n*Wholehearted Commitment*".
"\n1. I attend Sunday service every week - $wc1".
"\n2. I attend Life Group every week - $wc2".
"\n3. I actively pursue relationships, support, and connection with my Life Group - $wc3".
"\n4. When life is hard, I press in to God - $wc4".
"\n5. When life is hard, I press in to my church community - $wc5".
"\n6. I feel equipped and confident in lovingly doing conflict with others - $wc6".
"\n7. If I get in conflict with someone, I tend to: - $wc7".
"\n8. This is how I respond to correction:\n$wc8".
"\n\n*Intentional Empowerment*".
"\n1. I am interested in discipling others - $ie1".
"\n2. I feel confident in discipling others - $ie2".
"\n3. I love the way that God made me - $ie3".
"\n4. I am excited for God's plans for my life - $ie4".
"\n5. Some of my spiritual gifts are: $ie5".
"\n6. I feel comfortable praying in the Holy Spirit - $ie6".
"\n7. Areas that I feel I need to grow in using my gifts are: $ie7".
"\n\n*Spiritual Discipline*".
"\n1. I feel comfortable praying and do so regularly - $sd1".
"\n2. I feel comfortable worshipping and do so regularly - $sd2".
"\n3. I feel comfortable studying the Bible and do so regularly - $sd3".
"\n4. I feel comfortable fasting and do so regularly - $sd4".
"\n5. I feel comfortable hearing God and do so regularly - $sd5".
"\n\n*Discipleship Questions*".
"\n1. What made you decide to enter a discipleship relationship?\n$dq1".
"\n2. If you have been in discipleship previously, what did you like and what would you change about your experience?\n$dq2".
"\n3. What are you hoping to gain from discipleship in this season?\n$dq3".
"\n4. Share one or more topics you would like to explore in discipleship:\n$dq4";
$headers = "From: $myemail\n";
//If you wanted to include a reply-to this is where you'd do it, but we aren't collecting the submitter's email
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
//redirect to the 'thank you' page
header('Location: thank-you.html');
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
	<title>Contact form handler</title>
</head>

<body>
<!-- This page is displayed only if there is some error -->
<?php
echo nl2br($errors);
?>
</body>
</html>