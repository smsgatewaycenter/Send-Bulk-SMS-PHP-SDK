# SMS Gateway Center Bulk SMS API Integration

A Robust API implies to an upgraded functionality of the customer application. At SMSGatewayCenter, we mean to convey Robust API utilizing different approach in which an API should be dealt with independently (just like a whole product itself) to be incorporated to give and expend data from unknown clients.

# SMS Gateway Center PHP SDK
Integrage SMS Gateway Center APIs from your application by installing our PHP SDK.

# Installation
To install the SDK, you will need to be using Composer in your project. If you aren't using Composer yet, it's really simple! Here's how to install composer:

<pre>curl -sS https://getcomposer.org/installer | php</pre>

The SMS Gateway Center API client uses Guzzle to send HTTP messages.

If you just want to get started quickly, you should run the following command:

<pre>composer require smsgatewaycenterphpsdk/smsgatewaycenterapi</pre>

# Usage

Please ensure to use Composer's autoloader in your application to include dependencies automatically. Below examples are assumed that you have included in your file or just follow test documentation.

<pre>require_once '../../../../autoload.php';
use SMSGatewayCenterPhpSdk\object\sgc_sms;
$Auth = new \SMSGatewayCenterPhpSdk\object\sgc_auth();
$Auth->setUsername("test");
$Auth->setPassword("*****");

$Sms = new sgc_sms();
$Sms->setOutput("json");
//INITIATE HANDLE
$request = new \SMSGatewayCenterPhpSdk\api\sms\sgc_sms_send($Auth, $Sms);
</pre>

To send out your first SMS Message using SMS Gateway Center SDK:

<pre>//SEND BATCH
$Sms->setSenderId("SMSGAT");
$Sms->setText("Hello  World");
$Sms->setPhone("919999999999");
$Sms->setMsgType("text");
$Sms->setDuplicateCheck("true");
echo $request->batch();
</pre>

Please ensure to change sender name, text, phone as per your requirement.

# Help or Comments?

<ul>
<li>If something's not working: Ask the <a href="https://www.smsgateway.center/contact-us/" title="SMSGatewayCenter Support">SMSGatewayCenter Support</a></li>
</ul>