@extends('layouts.app')

@section('css')
<style>
    .privacy-policy-page {
        max-width: 1000px;
        margin: 0 auto;
        padding: 80px 0px;
    }
    .privacy-policy-page a {
        text-decoration: underline;
    }
    .privacy-policy-page .page-title {
        font-size: 32px;
        font-weight: 600;
        color: #333;
        margin-bottom: 60px;
    }
    .privacy-policy-page p {
        margin-bottom: 10px;
        line-height: 24px;
    }
    .privacy-policy-page strong {
        color: #555;
    }
    .privacy-policy-page table {
        color: #727272;
    }
    .privacy-policy-page table tr {
        font-size: 14px;
    }
    .privacy-policy-page table tr td {
        padding-right: 10px;
    }
    .privacy-policy-page table ul {
        margin-bottom: 0px;
    }
    .privacy-policy-page h3 {
        color: #555;
        margin-top: 20px;
        margin-bottom: 10px;
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="privacy-policy-page">
        <div class="page-title">Privacy Policy</div>
        <!-- <h3><a href="//quizzlybears.com/?ez_force_cookie_consent=1"><u>CLICK HERE TO CHANGE YOUR PRIVACY CONSENT SETTINGS</u></a></h3> -->
        <h3>What personal information do we collect from the people that visit our blog, website or app?</h3>

        <p class="text-muted">We do not collect information from visitors of our site. IP Address or other details to help you with your experience.</p>

        <h3>When do we collect information?</h3>

        <p class="text-muted">We collect information from you when you or enter information on our site.</p>

        <h3>How do we use your information?</h3>

        <p class="text-muted">We may use the information we collect from you when you register, make a purchase, sign up for our newsletter, respond to a survey or marketing communication, surf the website, or use certain other site features in the following ways:</p>

        <h3>Do we use ‘cookies’?</h3>

        <p class="text-muted">Yes. Cookies are small files that a site or its service provider transfers to your computer’s hard drive through your Web browser (if you allow) that enables the site’s or service provider’s systems to recognize your browser and capture and remember certain information. For instance, we use cookies to help us remember and process the items in your shopping cart. They are also used to help us understand your preferences based on previous or current site activity, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.</p>

        <h3>We use cookies to:</h3>

        <ul class="text-muted">
            <li>Understand and save user’s preferences for future visits.</li>
            <li>Keep track of advertisements.</li>
            <li>Compile aggregate data about site traffic and site interactions in order to offer better site experiences and tools in the future. We may also use trusted third-party services that track this information on our behalf.</li>
        </ul>
        
        <p class="text-muted">You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. You do this through your browser settings. Since browser is a little different, look at your browser’s Help Menu to learn the correct way to modify your cookies.</p>

        <p class="text-muted">If you turn cookies off, Some of the features that make your site experience more efficient may not function properly.It won’t affect the user’s experience that make your site experience more efficient and may not function properly.</p>

        <h3>Third-party disclosure</h3>

        <p class="text-muted">We do not sell, trade, or otherwise transfer to outside parties your Personally Identifiable Information unless we provide users with advance notice. This does not include website hosting partners and other parties who assist us in operating our website, conducting our business, or serving our users, so long as those parties agree to keep this information confidential. We may also release information when it’s release is appropriate to comply with the law, enforce our site policies, or protect ours or others’ rights, property or safety.</p>

        <p class="text-muted">However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other uses.</p>

        <h3>Third-party links</h3>

        <p class="text-muted">Occasionally, at our discretion, we may include or offer third-party products or services on our website. These third-party sites have separate and independent privacy policies. We therefore have no responsibility or liability for the content and activities of these linked sites. Nonetheless, we seek to protect the integrity of our site and welcome any feedback about these sites.</p>

        <h3>Google</h3>

        <p class="text-muted">Google’s advertising requirements can be summed up by Google’s Advertising Principles. They are put in place to provide a positive experience for users. https://support.google.com/adwordspolicy/answer/1316548?hl=en</p>

        <p class="text-muted">We use Google AdSense Advertising on our website. Google, as a third-party vendor, uses cookies to serve ads on our site. Google’s use of the DART cookie enables it to serve ads to our users based on previous visits to our site and other sites on the Internet. Users may opt-out of the use of the DART cookie by visiting the Google Ad and Content Network privacy policy.</p>

        <h3>We have implemented the following:</h3>

        <ul class="text-muted">
            <li>Remarketing with Google AdSense</li>
            <li>Google Display Network Impression Reporting</li>
            <li>Demographics and Interests Reporting</li>
            <li>DoubleClick Platform Integration</li>
        </ul>

        <p class="text-muted">We, along with third-party vendors such as Google use first-party cookies (such as the Google Analytics cookies) and third-party cookies (such as the DoubleClick cookie) or other third-party identifiers together to compile data regarding user interactions with ad impressions and other ad service functions as they relate to our website.</p>

        <h3>Opting Out</h3>

        <p class="text-muted">Users can set preferences for how Google advertises to you using the Google Ad Settings page. Alternatively, you can opt out by visiting the <a href="http://optout.networkadvertising.org/" target="_blank">Network Advertising Initiative Opt Out</a> page or by using the Google Analytics Opt Out Browser add on.</p>

        <h3>California Online Privacy Protection Act</h3>

        <p class="text-muted">CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy. The law’s reach stretches well beyond California to require any person or company in the United States (and conceivably the world) that operates websites collecting Personally Identifiable Information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals or companies with whom it is being shared. – See more at: http://consumercal.org/california-online-privacy-protection-act-caloppa/#sthash.0FdRbT51.dpuf</p>

        <h3>According to CalOPPA, we agree to the following:</h3>

        <ul class="text-muted">
            <li>Users can visit our site anonymously.</li>
            <li>Once this privacy policy is created, we will add a link to it on our home page or as a minimum, on the first significant page after entering our website.</li>
            <li>Our Privacy Policy link includes the word ‘Privacy’ and can easily be found on the page specified above.</li>
        </ul>

        <p class="text-muted">You will be notified of any Privacy Policy changes:</p>

        <ul class="text-muted">
            <li>On our Privacy Policy Page</li>
        </ul>

        <p class="text-muted">You can change your personal information:</p>

        <ul class="text-muted">
            <li>By emailing us</li>
        </ul>

        <h3>How does our site handle Do Not Track signals?</h3>

        <p class="text-muted">We honor Do Not Track signals and Do Not Track, plant cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in place.</p>

        <h3>Does our site allow third-party behavioral tracking?</h3>

        <p class="text-muted">It’s also important to note that we allow third-party behavioral tracking</p>

        <h3>COPPA (Children Online Privacy Protection Act)</h3>

        <p class="text-muted">When it comes to the collection of personal information from children under the age of 13 years old, the Children’s Online Privacy Protection Act (COPPA) puts parents in control. The Federal Trade Commission, United States’ consumer protection agency, enforces the COPPA Rule, which spells out what operators of websites and online services must do to protect children’s privacy and safety online.</p>

        <p class="text-muted">We do not specifically market to children under the age of 13 years old. Do we let third-parties, including ad networks or plug-ins collect PII from children under 13?</p>

        <h3>Fair Information Practices</h3>

        <p class="text-muted">The Fair Information Practices Principles form the backbone of privacy law in the United States and the concepts they include have played a significant role in the development of data protection laws around the globe. Understanding the Fair Information Practice Principles and how they should be implemented is critical to comply with the various privacy laws that protect personal information.</p>

        <h3>In order to be in line with Fair Information Practices we will take the following responsive action, should a data breach occur:</h3>

        <p class="text-muted">We will notify the users via in-site notifiation <strong>within 7 business days</strong>.</p>

        <p class="text-muted">We also agree to the Individual Redress Principle which requires that individuals have the right to legally pursue enforceable rights against data collectors and processors who fail to adhere to the law. This principle requires not only that individuals have enforceable rights against data users, but also that individuals have recourse to courts or government agencies to investigate and/or prosecute non-compliance by data processors.</p>

        <h3>CAN SPAM Act</h3>

        <p class="text-muted">The CAN-SPAM Act is a law that sets the rules for commercial email, establishes requirements for commercial messages, gives recipients the right to have emails stopped from being sent to them, and spells out tough penalties for violations.</p>

        <p class="text-muted strong">We collect your email address in order to update you in the event of a data breach.</p>
        <p class="text-muted strong">To be in accordance with CANSPAM, we agree to the following: Not email you without your consent first</p>
        <p class="text-muted">If at any time you would like to unsubscribe from receiving future emails, you can email us and we will promptly remove you from <strong>ALL</strong> correspondence.</p>

        <h3>Contacting Us</h3>

        <p class="text-muted">If there are any questions regarding this privacy policy, you may contact us using the information below.</p>

        <p class="text-muted">
            privacy@quizzlybears.com<br>
            QuizzlyBears.com
        </p>

        <strong style="display: block; margin-bottom: 15px;">Last updated February 20, 2020</strong>
    </div>
</div>
@endsection

@section('js')
@endsection
