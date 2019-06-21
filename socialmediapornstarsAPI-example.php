<p><b>https://socialmediapornstars.com API example</b></p>

<!--- 
First, you'll need to browse and select the model from which you want to fetch the social media profiles.

Step 1: Go to https://socialmediapornstars.com and click on the model you want to select.
Step 2: Copy the Hash and paste it in the url below

In this example I'll be using model: Kiara Mia
Model URL: https://socialmediapornstars.com/Pornstar.php?hash=74311d12a031f400c29d652f3dc65225bb11817a3f76d6a628986806f832fe8a
API url: https://socialmediapornstars.com/API.php?hash=74311d12a031f400c29d652f3dc65225bb11817a3f76d6a628986806f832fe8a
--->

<?php
$url = 'https://socialmediapornstars.com/API.php?hash=74311d12a031f400c29d652f3dc65225bb11817a3f76d6a628986806f832fe8a';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($ch);
if(curl_error($ch)) { 
echo 'error:' . curl_error($ch);
};
curl_close($ch);
$data = json_decode($json,true);
?>

<!--- Now we can print the results (or add it to your SQL database etc) --->
Twitter: <i><?php echo $data['twitter']; ?></i><br>
Snapchat: <i><?php echo $data['snapchat'];?></i><br>
Instagram: <i><?php echo $data['instagram'];?></i><br>
Facebook: <i><?php echo $data['facebook'];?></i><br>
Camsoda: <i><?php echo $data['camsoda'];?></i><br>

<br><br>

<!--- 
In some cases, some model might not have a Facebook or a Snapchat account, in that case the API returns with 'None'.
In case you don't want to echo (print) when the output is 'None', you can use the following example: 
--->
<p>Check if profile does not output <i>None</i>:<br>
<i><?php if ($data['instagram'] != 'None') echo $data['instagram'];?></i>
</p>

<!---
Example to print a link to social media account, in this example we'll use twitter
-->
<a href="https://twitter.com/<?php echo $data['twitter']; ?>">Click here for Kiara Mia's Twitter Account</a>
