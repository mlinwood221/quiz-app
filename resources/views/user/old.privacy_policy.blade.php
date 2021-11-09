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
        <p><span><strong>EZOIC SERVICE PRIVACY POLICY</strong></span></p>
        <p><span>quizzlybears.com ("Website") uses a third party technology called Ezoic.</span></p>
        <p><span>INFORMATION ABOUT OUR ORGANIZATION AND WEBSITE</span></p>
        <p><span><strong>Ezoic is committed to protecting your privacy. We will only use the information that we collect lawfully in accordance with the General Data Protection Regulation (GDPR) (Regulation (EU) 2016/679).</strong></span></p>
        <p><span>Ezoic's principal activities are:</span></p>
        <ul>
            <li><span>Website analytics</span></li>
            <li><span>Website personalization</span></li>
            <li><span>Website hosting</span></li>
        </ul>
        <p><span>Our privacy policy covers Ezoic Inc., Ezoic Limited and this Website:</span></p>
        <p><span>Ezoic Inc.</span></p>
        <p><span>6023 Innovation Way, Carlsbad, California, United States</span></p>
        <p><span>Ezoic Limited</span></p>
        <p><span>Northern Design Centre, Abbott's Hill, Gateshead, NE8 3DF United Kingdom</span></p>
        <p><span><strong>DATA</strong></span></p>
        <p><span>In order to provide our products and services and related support, it is necessary for Ezoic to transfer your personal data outside of the European Union.&nbsp; In such case, the data controller for this data for EU residents is Ezoic Inc. having its registered offices at 6023 Innovation Way, Carlsbad, California, United States.&nbsp; All questions of requests regarding the processing of data may be addresses to data@ezoic.com</span></p>
        <p><span><strong>PROVIDING VISITORS WITH ANONYMOUS ACCESS</strong></span></p>
        <p><span>If you do not consent to such collection, you can access this website without disclosing your personal data.</span></p>
        <p><span><strong>AUTOMATIC COLLECTION OF INFORMATION</strong></span></p>
        <p><span>Ezoic records data about the individuals and the traffic to this website. Ezoic is this website's limited agent (and data controller in the EU context) for the purpose of providing Internet data and optimization services. Ezoic may use this data to improve its service or enable other services (e.g., using visitor traffic logs or data posted through the service to improve the optimization of other websites).</span></p>
        <p><span><strong>Personal Information</strong></span></p>
        <p><span>Ezoic may collect personal information as defined in GDPR (such as IP address and a unique id in a cookie) about visitors to your website for the purposes of statistics, analytics and personalization. In addition, Ezoic works with numerous third parties for the collection and storage of data and the providing of analytics and advertising services.</span></p>
        <p><span><strong>Use of Personal Information</strong></span></p>
        <figure class="table">
            <table>
                <tbody>
                    <tr>
                        <td><span><strong>Purpose/Activity</strong></span></td>
                        <td><span><strong>Type(s) of Data</strong></span></td>
                        <td><span><strong>Lawful basis for processing</strong></span></td>
                    </tr>
                    <tr>
                        <td><span>To improve user experience</span></td>
                        <td>
                            <ul>
                                <li><span>Identity</span></li>
                                <li><span>Technical</span></li>
                                <li><span>Usage</span></li>
                            </ul>
                        </td>
                        <td><span>Your information helps us to provide you with a more pleasant, efficient experience on this website that may be customized to how you or others respond to content and ads on this or other websites.</span></td>
                    </tr>
                    <tr>
                        <td><span>To improve ad performance</span></td>
                        <td>
                            <ul>
                                <li><span>Identity</span></li>
                                <li><span>Technical</span></li>
                                <li><span>Usage</span></li>
                            </ul>
                        </td>
                        <td><span>Your information helps us to optimize the placement, size, timing and number of ads displayed to you. It enables us to make smart decision that help this website owner earn money but reduce the disruption of ads on your experience.</span></td>
                    </tr>
                    <tr>
                        <td><span>To improve content creation</span></td>
                        <td>
                            <ul>
                                <li><span>Identity</span></li>
                                <li><span>Technical</span></li>
                                <li><span>Usage</span></li>
                            </ul>
                        </td>
                        <td><span>Your information helps us learn what content you care about and enjoy and, the style of content you like and what you engage the most with. This helps us produce more content and features that you might like.</span></td>
                    </tr>
                    <tr>
                        <td><span>To improve website performance</span></td>
                        <td>
                            <ul>
                                <li><span>Identity</span></li>
                                <li><span>Technical</span></li>
                                <li><span>Usage</span></li>
                            </ul>
                        </td>
                        <td><span>Your information helps us measure various performance metrics about our site, such as site speed, so that we can improve the performance of this site.</span></td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p><span>&nbsp;</span></p>
        <p><span><strong>PROCESSING OF DATA AND CONSENT</strong></span></p>
        <p><span>We will process the data we collect about you to improve the operation of this and other websites. This information helps us make decisions about what content to show, how it should be formatted, the number, size and placement of advertisements and how content should be delivered to individuals. This information is also used for analysis of performance and reporting.</span></p>
        <p><span><strong>USE OF APPLICATION LOGS</strong></span></p>
        <p><span>Our servers automatically record information (“Application Log Data”) created by your use of this website. Application Log Data may include information such as your IP address, browser type, operating system, the referring web page, pages visited, location, your mobile carrier, device and application IDs, search terms, and cookie information. We use this information to diagnose and improve our services. Except as stated in section (Data Retention), we will either delete the Application Log Data or remove any account identifiers, such as your username, full IP address, or email address, after 48 months.</span></p>
        <p><span><strong>DATA RETENTION</strong></span></p>
        <p><span>The personal information we collect is retained for no longer than necessary to fulfill the stated purposes in section “PROCESSING OF DATA AND CONSENT” above or for a period specifically required by law or regulation that Ezoic is obligated to follow. Personal data used to fulfill verification of certain types of services such as SSL certificate, payments, and billing will be retained for a minimum of 5 years depending on the class of product or service and may be retained in either a physical or electronic format. Even if you request deletion or erasure of your data, we may retain your personal data to the extent necessary and for so long as necessary for our legitimate business interests or performance of contractual obligations. After the retention period is over, Ezoic securely disposes or anonymizes your personal information in order to prevent loss, theft, misuse, or unauthorized access.</span></p>
        <p><span><strong>CONFIDENTIALITY / SECURITY</strong></span></p>
        <p><span>We have implemented security policies, rules and technical measures to protect the personal data that we have under our control from: unauthorized access improper use or disclosure unauthorized modification unlawful destruction or accidental loss. All our employees and data processors, who have access to, and are associated with the processing of personal data, are obliged to respect the confidentiality of our visitors’ personal data. We ensure that your personal data will not be disclosed to State institutions and authorities except if required by law or other regulation</span></p>
        <p><span><strong>DATA ACCESS &amp; DELETION</strong></span></p>
        <p><span>You have the right to view information that we have collected about you and to request deletion of any personal information we may have. You can use </span><a href="//quizzlybears.com/EzoicUserDataProtection.html"><span>this data lookup tool</span></a><span> to complete these actions.</span></p>
        <p><span>&nbsp;</span><span><strong>Cookies</strong></span></p>
        <p><span>Below is a list of cookies that are commonly set on this website.</span></p>
        <p><span>&nbsp;</span></p>
        <table>
            <tbody>
                <tr>
                    <th>Cookie Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th style="display: none">Duration</th>
                </tr>
                <tr>
                    <td style="word-break: break-word">PHPSESSID</td>
                    <td>Necessary</td>
                    <td>A unique identifier used to preserve states across pages.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">__cfduid</td>
                    <td>Necessary</td>
                    <td>Used by the content network, Cloudflare, to identify trusted web traffic.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezCMPCookieConsent</td>
                    <td>Necessary</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track when a user consents to cookies.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ez_rdr_count</td>
                    <td>Necessary</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track redirects</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ez_rdr</td>
                    <td>Necessary</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track redirects.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ez_pub_site</td>
                    <td>Necessary</td>
                    <td>Used by the analytics and personalization company, Ezoic, to only show the site with Ezoic's features enabled. </td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">cookieconsent_dismissed</td>
                    <td>Necessary</td>
                    <td>Used to track closure of a cookie consent dialog.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">cf_use_ob</td>
                    <td>Necessary</td>
                    <td>Used by Content Delivery Network, Cloudflare, to protect against fraud and speed up web delivery.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">session_depth</td>
                    <td>Necessary</td>
                    <td>Used to track the number of pages you visit in a session on this site.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ez_view_original_only</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to show the original site without Ezoic's features.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ez_view_optimized_only</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to show the original site without Ezoic's features.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">speed_no_process</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to turn off site speed features for this user.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">sitespeed_preview</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to allow this user to preview certain site speed features.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ez_ad_position_version</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to determine if they use the Ad Tester product for this user, used by the Ad Tester extension.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ez_ad_position_version</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to determine if they use the Ad Tester product for this user, used by the Ad Tester extension.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezpicker_showall</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to tell the ezpicker app to show all placeholders.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezpicker_showall</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to tell the ezpicker app to show all placeholders.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezpicker_nocache</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to tell the ezpicker app to run without using the cache.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezpicker_nocache</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to tell the ezpicker app to run without using the cache.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezpicker</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to turn on ezpicker</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezpicker</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to turn on ezpicker</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ez_view_optimized_only</td>
                    <td>Preferences</td>
                    <td>Used by the analytics and personalization company, Ezoic, to show the optimized site with Ezoic's features.</td>
                    <td style="display: none">525600 min</td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ez_autoinsert</td>
                    <td>Preferences</td>
                    <td>Used by Ezoic to determine if this user should see auto-inserted ad placeholders.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">_gid</td>
                    <td>Statistics</td>
                    <td>Used to distinguish users by Google Analytics</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezCMPCCS</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track when a user consents to statistics cookies.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">_ga</td>
                    <td>Statistics</td>
                    <td>Used to distinguish users by Google Analytics</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">__qca</td>
                    <td>Statistics</td>
                    <td>Collects anonymous data on the user's visits to the website, such as the number of visits, average time spent on the website and what pages have been loaded with the purpose of generating reports for optimising the website content.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezosuigenerisc</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to uniquely identify you across different websites on the internet so your experience can be customized.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezosuigenerisc</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to uniquely identify you across different websites on the internet so your experience can be customized.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezosuigeneris</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to uniquely identify you across different websites on the internet so your experience can be customized.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezds</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to store the pixel size of your screen to help personalize your experience and ensure content fits.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ez_recommended_pages</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track users visiting from the recommended pages widget.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">AMP_ECID_EZOIC</td>
                    <td>Statistics</td>
                    <td>Used by personalization and analytics company Ezoic for statistics on Accelerated Mobile Pages</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezouspvh</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track how many pages a user has visited since their last visit.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezouspvv</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track how many pages a user has visited.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezouspva</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track how many pages a user has visited all time.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezouspva</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track how many pages a user has visited all time.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezepvv</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track which pages this user has viewed.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezepvv</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to track which pages this user has viewed.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezohw</td>
                    <td>Statistics</td>
                    <td>Used by the analytics and personalization company, Ezoic, to store the pixel size of your browser to help personalize your experience and ensure content fits.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">bfp_sn_rf_8b2087b102c9e3e5ffed1c1478ed8b78</td>
                    <td>Marketing</td>
                    <td>Used to track your browsing activity across multiple websites.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">bafp</td>
                    <td>Marketing</td>
                    <td>Used to track your browsing activity across multiple websites.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezdg</td>
                    <td>Marketing</td>
                    <td>Used by the analytics and personalization company, Ezoic, to store demographic information like age and gender.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">ezdg</td>
                    <td>Marketing</td>
                    <td>Used by the analytics and personalization company, Ezoic, to store demographic information like age and gender.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">__gads</td>
                    <td>Marketing</td>
                    <td>Used to register what ads have been displayed to the user.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">bfp_sn_rf_8b2087b102c9e3e5ffed1c1478ed8b78</td>
                    <td>Marketing</td>
                    <td>Used to track your browsing activity across multiple websites.</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="word-break: break-word">cto_optout</td>
                    <td>Marketing</td>
                    <td>Used by ad network Criteo to record if you've opted of personalized ads.</td>
                    <td style="display: none"></td>
                </tr>
            </tbody>
        </table>
        <p></p>
        <p>&nbsp;</p>
        <p><span>Below is a list of usage, technical and identify metrics that are commonly stored and processed when you use this website</span></p>
        <figure class="table">
            <table>
                <tbody>
                    <tr>
                        <td><span>Your location information, including country, state, city, metro and postal code</span></td>
                    </tr>
                    <tr>
                        <td><span>The webpage your were at before this website</span></td>
                    </tr>
                    <tr>
                        <td><span>The type of browser you use and the version</span></td>
                    </tr>
                    <tr>
                        <td><span>The brand and operating system of your device</span></td>
                    </tr>
                    <tr>
                        <td><span>What time zone you're in and what time it is there</span></td>
                    </tr>
                    <tr>
                        <td><span>What pages on this site you visit</span></td>
                    </tr>
                    <tr>
                        <td><span>How you interact with this website, including time spent, how much you scroll and your mouse movements</span></td>
                    </tr>
                    <tr>
                        <td><span>The size of your devices screen and the size of the browser on that screen</span></td>
                    </tr>
                    <tr>
                        <td><span>What content you share on the page</span></td>
                    </tr>
                    <tr>
                        <td><span>If you copy and paste content on this website</span></td>
                    </tr>
                    <tr>
                        <td><span>What ad or link you clicked on to arrive at this website</span></td>
                    </tr>
                    <tr>
                        <td><span>The type of internet connection you use and your ISP or service provider</span></td>
                    </tr>
                    <tr>
                        <td><span>How long it takes for this website's content to get transferred to your browser, load in your browser and render</span></td>
                    </tr>
                    <tr>
                        <td><span>The weather where you are currently located</span></td>
                    </tr>
                    <tr>
                        <td><span>Your age and gender</span></td>
                    </tr>
                    <tr>
                        <td><span>Your ip address</span></td>
                    </tr>
                    <tr>
                        <td><span>A unique id so that we can recognize you</span></td>
                    </tr>
                    <tr>
                        <td><span>What ads you click on</span></td>
                    </tr>
                </tbody>
            </table>
        </figure>
        <p>&nbsp;</p>
        <hr>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p><span><strong>A list of Vendors that may be used on this website</strong></span></p>
        <p></p>
        <table>
            <tbody>
                <tr>
                    <th>Name</th>
                    <th>Features</th>
                    <th>Purposes</th>
                </tr>
                <tr>
                    <td><a href="https://www.getblue.io/privacy/" target="_blank" rel="nofollow">Blue</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adgear.com/en/privacy" target="_blank" rel="nofollow">AdGear Technologies, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.1agency.de/datenschutz" target="_blank" rel="nofollow">1Agency</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.arrivalist.com/privacy/" target="_blank" rel="nofollow">Arrivalist Co</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.tapad.com/eu-privacy-policy" target="_blank" rel="nofollow">Tapad, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.whiteops.com/privacy" target="_blank" rel="nofollow">White Ops, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://springserve.com/privacy-policy/" target="_blank" rel="nofollow">SpringServe, LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adledge.com/data-privacy/" target="_blank" rel="nofollow">SublimeSkinz - Adledge</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.clickonometrics.com/optout/" target="_blank" rel="nofollow">360e-com Sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://corp.fanbyte.com/legal/privacy" target="_blank" rel="nofollow">ZAM Network LLC dba Fanbyte</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.parrable.com/privacy-policy/" target="_blank" rel="nofollow">Parrable, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sovrn.com/sovrn-privacy/" target="_blank" rel="nofollow">Sovrn Holdings Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://pubnative.net/privacy-notice/" target="_blank" rel="nofollow">Verve Group Europe GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.salesforce.com/company/privacy/" target="_blank" rel="nofollow">Salesforce.com, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://havasmediagroup.com/data-protection-policy/" target="_blank" rel="nofollow">Havas Media (Artemis Alliance S.L.U.)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://yoc.com/privacy/" target="_blank" rel="nofollow">YOC AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.marfeel.com/privacy-policy/" target="_blank" rel="nofollow">Marfeel Solutions, SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.proxistore.com/common/en/cgv" target="_blank" rel="nofollow">PROXISTORE</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://frontend.adhslx.com/privacy.html?" target="_blank" rel="nofollow">Solocal</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.eulerian.com/en/privacy/" target="_blank" rel="nofollow">Eulerian Technologies</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.dentsuaegisnetwork.com/it/it/policies/info-cookie" target="_blank" rel="nofollow">Dentsu Aegis Network Italia SpA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.pinpoll.com/#data_protection_declaration" target="_blank" rel="nofollow">Pinpoll GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://epom.com/privacy-policy" target="_blank" rel="nofollow">Epom Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://sharethis.com/privacy/" target="_blank" rel="nofollow">ShareThis, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://platform-cdn.sharethrough.com/privacy-policy" target="_blank" rel="nofollow">Sharethrough, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.seedtag.com/en/privacy-policy/" target="_blank" rel="nofollow">Seedtag Advertising S.L</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://mindlytix.com/privacy/" target="_blank" rel="nofollow">Mindlytix SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://app.streameye.com/policy/net" target="_blank" rel="nofollow">Stream Eye OOD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://qualitymedianetwork.de/datenschutz/" target="_blank" rel="nofollow">Quality Media Network GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.playrcart.com/privacy-policy/" target="_blank" rel="nofollow">Playrcart Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.pulselive.com/privacy-policy" target="_blank" rel="nofollow">Pulse Innovations Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://help.revcontent.com/en/knowledge/revcontent-privacy-policy" target="_blank" rel="nofollow">Revcontent, LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.wizaly.com/terms-of-use#privacy-policy" target="_blank" rel="nofollow">Wizaly</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ultimedia.com/POLICY.html" target="_blank" rel="nofollow">DIGITEKA Technologies</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://kubient.com/privacy-policy/" target="_blank" rel="nofollow">Kubient Inc. </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.quantumcast-digital.com/privacy-policy" target="_blank" rel="nofollow">QuantumCast digital GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.realytics.io/platform-privacy-policy/" target="_blank" rel="nofollow">Realytics</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.exitbee.com/privacy/" target="_blank" rel="nofollow">Exit Bee Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.telecoming.com/privacy-policy/" target="_blank" rel="nofollow">Telecoming S.A.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.retailads.net/ueberuns/datenschutz/" target="_blank" rel="nofollow">retailAds GmbH &amp; Co. KG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.experian.co.uk/privacy/consumer-information-portal/" target="_blank" rel="nofollow">Experian Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.minutemedia.com/privacy-policy" target="_blank" rel="nofollow">SPORTORITY UK LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.b2bmg.com/en/data-privacy/" target="_blank" rel="nofollow">B2B Media Group EMEA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www2.rampanel.com/privacy-policy/" target="_blank" rel="nofollow">Research and Analysis of Media in Sweden AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://cookie.market/privacyPolicy.php" target="_blank" rel="nofollow">Cookie Market LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ncaudienceexchange.com/privacy/" target="_blank" rel="nofollow">NC Audience Exchange, LLC (NewsIQ)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.e-planning.net/en/privacy.html" target="_blank" rel="nofollow">Teroa S.A.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://audience-solutions.com/privacy.html" target="_blank" rel="nofollow">Audience Solutions S.A.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.plista.com/about/privacy/" target="_blank" rel="nofollow">plista GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://hybrid.ai/data_protection_policy" target="_blank" rel="nofollow">Hybrid Adtech GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.optidigital.com/privacy-policy/" target="_blank" rel="nofollow">Opti Digital SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://m32.media/privacy-cookie-policy/" target="_blank" rel="nofollow">M32 Connect Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://connatix.com/privacy-policy/" target="_blank" rel="nofollow">Connatix Native Exchange Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://zeotap.com/privacy_policy" target="_blank" rel="nofollow">zeotap GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="http://www.admaxim.com/admaxim-privacy-policy/" target="_blank" rel="nofollow">AdMaxim Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://seenthis.co/privacy-policy/" target="_blank" rel="nofollow">Seenthis AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.gsi-one.org/de/privacy-policy.html" target="_blank" rel="nofollow">GP One GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://hindsightsolutions.net/terms-of-service/" target="_blank" rel="nofollow">Hindsight Technology Solutions, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.verizonmedia.com/policies/ie/en/verizonmedia/privacy/index.html" target="_blank" rel="nofollow">Verizon Media EMEA Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.33across.com/privacy-policy" target="_blank" rel="nofollow">33Across</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ogury.com/privacy-policy/" target="_blank" rel="nofollow">Ogury Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adbutler.com/agreements.spark?agreement=privacy" target="_blank" rel="nofollow">Sparklit Networks Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://hashtag-labs.com/privacy-policy.html" target="_blank" rel="nofollow">Hashtag Labs Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.protected.media/privacy-policy/" target="_blank" rel="nofollow">Protected Media LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://privacy.audienceproject.com" target="_blank" rel="nofollow">AudienceProject Aps</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://anzu.io/privacy/" target="_blank" rel="nofollow">Anzu Virtual Reality LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://reg.tiscali.cz/privacy-policy" target="_blank" rel="nofollow">Performax.cz, s.r.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://fiksu.com/privacy-policy/" target="_blank" rel="nofollow">GDMServices, Inc. d/b/a FiksuDSP</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://freestar.com/data-policy/" target="_blank" rel="nofollow">Publisher First, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://leadoo.com/privacy-policy/" target="_blank" rel="nofollow">Leadoo Marketing Technologies Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adventori.com/with-us/legal-notice/" target="_blank" rel="nofollow">ADventori SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adsquare.com/privacy" target="_blank" rel="nofollow">adsquare GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.emetriq.com/datenschutz/" target="_blank" rel="nofollow">emetriq GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://jampp.com/privacy.html" target="_blank" rel="nofollow">Jampp LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://hybridtheory.com/privacy-policy/" target="_blank" rel="nofollow">Hybrid Theory</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.commandersact.com/en/privacy/" target="_blank" rel="nofollow">Commanders Act</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adcolony.com/privacy-policy/" target="_blank" rel="nofollow">AdColony, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://realview.realeyesit.com/privacy" target="_blank" rel="nofollow">Realeyes OU</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://underdogmedia.com/privacy-policy/" target="_blank" rel="nofollow">Underdog Media LLC </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://ayads.co/privacy.php" target="_blank" rel="nofollow">Sublime</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://unruly.co/privacy/" target="_blank" rel="nofollow">Unruly Group Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://theadex.com/privacy-opt-out/" target="_blank" rel="nofollow">The ADEX GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adzymic.co/privacy" target="_blank" rel="nofollow">Adzymic Pte Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.pixfuture.com/data-processing-agreement/" target="_blank" rel="nofollow">PixFuture Media Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://terminus.com/privacy-policy/" target="_blank" rel="nofollow">Terminus Software Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://piximedia.com/privacy/" target="_blank" rel="nofollow">PIXIMEDIA SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://go.pl/polityka-prywatnosci/" target="_blank" rel="nofollow">Go.pl sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.iubenda.com/privacy-policy/30563919" target="_blank" rel="nofollow">Traffective GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://marketing.targetspot.com/Targetspot/Legal/TargetSpot%20Privacy%20Policy%20-%20June%202018.pdf" target="_blank" rel="nofollow">Targetspot Belgium SPRL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.cpex.cz/pro-uzivatele/ochrana-soukromi/" target="_blank" rel="nofollow">Czech Publisher Exchange z.s.p.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.contentignite.com/privacy-policy/" target="_blank" rel="nofollow">Content Ignite</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.justtag.com/POLITYKA_PRYWATNOSCI.pdf" target="_blank" rel="nofollow">Justtag Sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sizmek.com/privacy-policy/" target="_blank" rel="nofollow">Sizmek by Amazon</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://fifty.io/privacy-policy.php" target="_blank" rel="nofollow">Fifty Technology Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.opinionoutpost.co.uk/en-gb/policies/privacy" target="_blank" rel="nofollow">Dynata LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ermes.ai/politique-de-confidentialite/" target="_blank" rel="nofollow">Ermes</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adtarget.com.tr/adtarget-privacy-policy-2020.pdf" target="_blank" rel="nofollow">Adtarget Medya A.S.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adlane.info/privacy-policy/" target="_blank" rel="nofollow">Adlane LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://reso.no/privacy-policy/" target="_blank" rel="nofollow">Resono B.V.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adevinta.com/about/privacy/" target="_blank" rel="nofollow">Adevinta Spain S.L.U.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.invibes.com/terms" target="_blank" rel="nofollow">INVIBES GROUP</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://privacy.webads.eu/" target="_blank" rel="nofollow">WebAds B.V</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://spotad.co/privacy-policy-2/" target="_blank" rel="nofollow">Spotad</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://threedium.co.uk/privacy" target="_blank" rel="nofollow">Threedium</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.fraudlogix.com/privacy-policy/" target="_blank" rel="nofollow">Redbranch, Inc dba Fraudlogix</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://screenondemand.de/datenschutzerklaerung/" target="_blank" rel="nofollow">SoD ScreenOnDemand GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.clickintext.com/about/charte-rgpd.php" target="_blank" rel="nofollow">ADSTOURS SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://letsrebold.com/es/privacy-policy/" target="_blank" rel="nofollow">Rebold Marketing &amp; Communication SLU</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://inter.effiliation.com/politique-confidentialite.html" target="_blank" rel="nofollow">Effiliation / Effinity</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ucfunnel.com/privacy-policy" target="_blank" rel="nofollow">ucfunnel Co., Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.dailymotion.com/legal/privacy" target="_blank" rel="nofollow">Dailymotion SA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://sqreemtech.com/privacy/" target="_blank" rel="nofollow">Sqreem Technologies Private Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.exactag.com/en/data-privacy/" target="_blank" rel="nofollow">Exactag GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mediametrie.fr/fr/gestion-des-cookies" target="_blank" rel="nofollow">MEDIAMETRIE</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://aptiv.io/privacy-policy" target="_blank" rel="nofollow">Aptivio Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://pubfinity.com/privacy-policy/" target="_blank" rel="nofollow">Pubfinity LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://inetpro.io/privacy-policyeng.do" target="_blank" rel="nofollow">iProspect GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.onetag.com/privacy/" target="_blank" rel="nofollow">OneTag Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://seeding-alliance.de/datenschutz/" target="_blank" rel="nofollow">Seeding Alliance GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ezoic.com/terms/" target="_blank" rel="nofollow">Ezoic Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adagio.io/privacy" target="_blank" rel="nofollow">Onfocus (Adagio)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sojern.com/privacy/privacy-policy/" target="_blank" rel="nofollow">Sojern, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.yieldlove.com/cookie-policy" target="_blank" rel="nofollow">Yieldlove GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="http://viewpay.tv/mentions-legales/" target="_blank" rel="nofollow">ViewPay</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adsbynimbus.com/privacy-policy" target="_blank" rel="nofollow">Timehop, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.amobee.com/trust/gdpr/" target="_blank" rel="nofollow">Amobee Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.vi.ai/privacy-policy/" target="_blank" rel="nofollow">video intelligence AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.spolecznosci.pl/polityka-prywatnosci" target="_blank" rel="nofollow">Spolecznosci Sp. z o.o. Sp. k.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.we-are-adot.com/privacy-policy/" target="_blank" rel="nofollow">A.Mob</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://emarketingsolutions.es/privacy-policy" target="_blank" rel="nofollow">eMarketingSolutions, Online Marketing S.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.webgains.com/public/de/datenschutzerklaerung/" target="_blank" rel="nofollow">Webgains GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="http://www.viznet.tv/privacy-policy" target="_blank" rel="nofollow">Viznet</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.truvid.com/terms/privacy_policy" target="_blank" rel="nofollow">Truvid Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://related.hu/adatkezeles/" target="_blank" rel="nofollow">Natív Hirdetés Korlátolt Felelősségű Társaság</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.clipr.co/privacy-terms" target="_blank" rel="nofollow">Clipr</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://media16.tv/privacy-policy/" target="_blank" rel="nofollow">Media16 ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adtelligent.com/privacy-policy/" target="_blank" rel="nofollow">Adtelligent Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.kochava.com/support-privacy/" target="_blank" rel="nofollow">Kochava Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://goldbach.com/ch/de/datenschutz" target="_blank" rel="nofollow">Goldbach Group AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mytraffic.io/en/privacy" target="_blank" rel="nofollow">MyTraffic</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.rdandx.com/privacy-policy " target="_blank" rel="nofollow">RDandX Group DMCC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.inres.sk/pp/" target="_blank" rel="nofollow">NetSuccess, s.r.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.widespace.com/legal/privacy-policy-notice/" target="_blank" rel="nofollow">Widespace AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://permutive.com/privacy/" target="_blank" rel="nofollow">Permutive Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://passendo.com/users-privacy-policy" target="_blank" rel="nofollow">Passendo Aps</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://richaudience.com/privacy/" target="_blank" rel="nofollow">Rich Audience Technologies SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.smilewanted.com/privacy.php" target="_blank" rel="nofollow">Smile Wanted Group</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.selectmedia.asia/terms-and-privacy/" target="_blank" rel="nofollow">SelectMedia International LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://impactify.io/privacy-policy/" target="_blank" rel="nofollow">Impactify </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://azerion.com/business/privacy.html" target="_blank" rel="nofollow">Azerion Holding B.V.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://business.eskimi.com/privacypolicy/" target="_blank" rel="nofollow">UAB Aktyvus sektorius - Eskimi</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://channelpilot.co.uk/privacy-policy" target="_blank" rel="nofollow">Channel Pilot Solutions GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.rtbhouse.com/privacy-center/services-privacy-policy/" target="_blank" rel="nofollow">RTB House S.A.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://unruly.co/legal/privacy/" target="_blank" rel="nofollow">Unruly Group LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://id5.io/privacy" target="_blank" rel="nofollow">ID5 Technology SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://permodo.com/de/privacy.html" target="_blank" rel="nofollow">Permodo GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.s4m.io/privacy-policy/" target="_blank" rel="nofollow">Fusio by S4M</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bsmartdata.com/en/privacy/" target="_blank" rel="nofollow">BSmartData GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://quantyoo.de/datenschutz" target="_blank" rel="nofollow">Quantyoo GmbH &amp; Co. KG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://e-volution.ai/privacy-policy-3/" target="_blank" rel="nofollow">Evolution Technologies Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.definemedia.de/datenschutz-conative/" target="_blank" rel="nofollow">DEFINE MEDIA GMBH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://belboon.com/en/privacy/" target="_blank" rel="nofollow">belboon GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.tl1mkt.com/privacy.html" target="_blank" rel="nofollow">THE LINEA 1 MKT SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://crimtan.com/privacy/" target="_blank" rel="nofollow">Crimtan Holdings Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.publicismedia.de/datenschutz/" target="_blank" rel="nofollow">Publicis Media GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://mountain.com/privacy-policy/#ref-sh" target="_blank" rel="nofollow">MNTN</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://deltaprojects.com/data-collection-policy" target="_blank" rel="nofollow">Delta Projects AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://bliink.io/privacy-policy" target="_blank" rel="nofollow">BLIINK SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adquiver.com/privacidad/" target="_blank" rel="nofollow">AdQuiver Media SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.brightcom.com/privacy-policy/" target="_blank" rel="nofollow">Online Media Solutions LTD (BDA: Brightcom)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://addrelevance.be/cookie-statement-2/" target="_blank" rel="nofollow">Addrelevance</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://livewrapped.com/privacy-policy" target="_blank" rel="nofollow">Livewrapped AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://extremereach.com/privacy-policies/" target="_blank" rel="nofollow">Extreme Reach, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="http://www.audio.ad/privacy.html" target="_blank" rel="nofollow">Kertil Iberia SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.advanced-store.com/de/datenschutz/" target="_blank" rel="nofollow">advanced store GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://playground.xyz/privacy" target="_blank" rel="nofollow">PLAYGROUND XYZ EMEA LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mobilewalla.com/business-services-privacy-policy" target="_blank" rel="nofollow">Mobilewalla, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://developers.kameleoon.com/local-storage.html#list-of-collected-data" target="_blank" rel="nofollow">Kameleoon SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://consumer.huawei.com/minisite/cloudservice/ads/privacy-statement.htm?country=EU&amp;language=en-eu" target="_blank" rel="nofollow">HUAWEI Ads</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://habu.com/privacy-policy" target="_blank" rel="nofollow">Habu</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://skimlinks.com/pages/privacy-policy" target="_blank" rel="nofollow">Skimbit Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://telaria.com/outstream-services/" target="_blank" rel="nofollow">Telaria SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adacado.com/privacy-policy/" target="_blank" rel="nofollow">Adacado Technologies Inc. (DBA Adacado)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://nexd.com/privacy-policy" target="_blank" rel="nofollow">NEXD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.dentsu.com/dk/dk/privatlivspolitik" target="_blank" rel="nofollow">Dentsu Denmark A/S</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.nextroll.com/privacy" target="_blank" rel="nofollow">NextRoll, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.freewheel.com/privacy-policy" target="_blank" rel="nofollow">Comcast International France SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.nonstoppartner.net" target="_blank" rel="nofollow">Resolution Media München GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.rematch.tech/cookiepolicy/" target="_blank" rel="nofollow">Ketchup Adv Spa</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://alphalyr.fr/en/privacy-policy/" target="_blank" rel="nofollow">Alphalyr SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.wetter.com/internal/news/datenschutzhinweise_aid_607698849b8ecf79e21584fa.html" target="_blank" rel="nofollow">wetter.com GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://liveintent.com/services-privacy-policy/" target="_blank" rel="nofollow">Liveintent Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sub2tech.com/privacy-policy/" target="_blank" rel="nofollow">Sub2 Technologies Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://maximusx.com/privacy-policy/" target="_blank" rel="nofollow">Maximus Live LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://aaa.artefact.com/privacy-policy.do" target="_blank" rel="nofollow">Artefact Deutschland GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://admetrics.io/en/privacy_policy/" target="_blank" rel="nofollow">admetrics GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sift.co/privacy" target="_blank" rel="nofollow">Sift Media, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://kairion.de/datenschutzbestimmungen/" target="_blank" rel="nofollow">Kairion GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://tvsquared.com/privacy-policy" target="_blank" rel="nofollow">TV SQUARED LIMITED</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adbalancer.com/datenschutz" target="_blank" rel="nofollow">adbalancer Werbeagentur GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://polityka-prywatnosci.onet.pl/" target="_blank" rel="nofollow">Ringier Axel Springer Polska sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adssets.com/policy/" target="_blank" rel="nofollow">Adssets AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adcell.de/agb#sector_6" target="_blank" rel="nofollow">ADCELL | Firstlead GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://easy-m.de/" target="_blank" rel="nofollow">EASY Marketing GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://privacy.adtriba.com/" target="_blank" rel="nofollow">Adtriba GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.digitaleast.mobi/en/legal/privacy-policy/" target="_blank" rel="nofollow">Digital East GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://corp.aarki.com/privacy" target="_blank" rel="nofollow">Aarki, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.fiducia.eco/privacy" target="_blank" rel="nofollow">Fiducia DLT Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.glomex.com/en/privacy-policy/privacy-notice-for-the-glomex-player/" target="_blank" rel="nofollow">glomex GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://rakutenadvertising.com/legal-notices/services-privacy-policy/" target="_blank" rel="nofollow">Rakuten Marketing LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://liveramp.fr/iab-transparency-consent-framework/" target="_blank" rel="nofollow">LiveRamp, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://travelaudience.com/product-privacy-policy/" target="_blank" rel="nofollow">travel audience GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.maximiles.com/privacy-policy" target="_blank" rel="nofollow">BILENDI SA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.geniussports.com/privacy-policy" target="_blank" rel="nofollow">Betgenius Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://mediascore.de/datenschutz" target="_blank" rel="nofollow">Mediascore mbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.pangleglobal.com/privacy" target="_blank" rel="nofollow">BYTEDANCE PTE. LTD.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://speakol.com/terms-of-use" target="_blank" rel="nofollow">SPEAKOL DMCC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.roq.ad/privacy-policy" target="_blank" rel="nofollow">Roq.ad Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.vibrantmedia.com/en/privacy-policy/" target="_blank" rel="nofollow">Vibrant Media Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://optoutadvertising.com/privacy-policy/" target="_blank" rel="nofollow">Opt Out Advertising B.V. </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://zoomd.com/privacy-policy/" target="_blank" rel="nofollow">Zoomd Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bertelsmann.de/meta/datenschutz/" target="_blank" rel="nofollow">Bertelsmann Data Service GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://tacticrealtime.com/privacy/" target="_blank" rel="nofollow">TACTIC™ Real-Time Marketing AS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.admarketplace.com/privacy-policy/" target="_blank" rel="nofollow">adMarketplace, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://casino.mindthebet.co.uk/themes/mindthebetv2-casino/privacy.php" target="_blank" rel="nofollow">Mediaforce LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://admanmedia.com/politica.html?setLng=es" target="_blank" rel="nofollow">ADman Interactive SLU</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.addefend.com/en/privacy-policy/" target="_blank" rel="nofollow">AdDefend GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://dataseat.com/privacy-policy" target="_blank" rel="nofollow">Dataseat Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.appier.com/privacy-policy/" target="_blank" rel="nofollow">Appier PTE Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://arkeero.com/privacy-2/" target="_blank" rel="nofollow">Arkeero</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.nobid.io/privacy-policy/" target="_blank" rel="nofollow">NoBid, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://questpass.pl/pl/regulaminy/polityka-prywatnosci/" target="_blank" rel="nofollow">Questpass Sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.jellyfish.com/fr-fr/privacy-policy" target="_blank" rel="nofollow">Jellyfish France</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://showheroes.com/privacy/" target="_blank" rel="nofollow">Showheroes SE</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bidtellect.com/privacy-policy/" target="_blank" rel="nofollow">Bidtellect, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://viralize.com/privacy-policy" target="_blank" rel="nofollow">Viralize SRL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.stroeer.de/konvergenz-konzepte/daten-technologien/stroeer-ssp/datenschutz-ssp.html" target="_blank" rel="nofollow">Ströer SSP GmbH (DSP)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.infonline.de/en/privacy-policy/" target="_blank" rel="nofollow">INFOnline GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://spicymobile.pl/polityka-prywatnosci" target="_blank" rel="nofollow">SPICY MOBILE Sp z o.o. Sp.k.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.fido.id/privacy/" target="_blank" rel="nofollow">Fido S.r.l</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.emerse.com/privacy-policy/" target="_blank" rel="nofollow">Emerse Sverige AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://revealmobile.com/privacy/" target="_blank" rel="nofollow">Reveal Mobile Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ziffdavis.com/privacy-policy" target="_blank" rel="nofollow">Ziff Davis LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://sk.search.etargetnet.com/policy.html" target="_blank" rel="nofollow">ETARGET SE</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.yieldlab.de/meta-navigation/datenschutz/" target="_blank" rel="nofollow">Yieldlab AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://primo.design/docs/PrivacyPolicyPrimo.html" target="_blank" rel="nofollow">Visarity Technologies GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.shinystat.com/it/informativa_privacy_generale.html" target="_blank" rel="nofollow">ShinyStat S.p.a.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.pg.com/privacy/english/privacy_statement.shtml" target="_blank" rel="nofollow">The Procter &amp; Gamble Company</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sirdata.com/en/Privacy" target="_blank" rel="nofollow">Sirdata Cookieless</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://help.sortable.com/help/privacy-policy" target="_blank" rel="nofollow">Snapsort Inc., operating as Sortable</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bidswitch.com/privacy-policy/" target="_blank" rel="nofollow">BIDSWITCH GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.semasio.com/privacy-policy/" target="_blank" rel="nofollow">Semasio GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://pixalate.com/privacypolicy/" target="_blank" rel="nofollow">Pixalate, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://pexi.nl/privacy-policy/" target="_blank" rel="nofollow">Pexi B.V.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://geistm.com/en/legal/privacy" target="_blank" rel="nofollow">GeistM Technologies LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.placense.com/privacy-notice " target="_blank" rel="nofollow">Placense Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://netzwerk.uppr.de/privacy-policy.do" target="_blank" rel="nofollow">uppr GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://privacy.metadsp.co.uk/privacy-policy.html" target="_blank" rel="nofollow">Dentsu London Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://login.rtbmarket.com/gdpr" target="_blank" rel="nofollow">EASYmedia GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.openweb.com/legal-and-privacy/privacy/" target="_blank" rel="nofollow">OpenWeb LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.eltiempo.com/politica-privacidad" target="_blank" rel="nofollow">Pelmorex Corp.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.jwplayer.com/privacy/" target="_blank" rel="nofollow">Longtail Ad Solutions, Inc dba JW Player</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.tresensa.com/eu-privacy" target="_blank" rel="nofollow">TreSensa Technologies, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://appmonet.com/privacy-policy/" target="_blank" rel="nofollow">Monet Engine Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.triple13.io/privacy-policy" target="_blank" rel="nofollow">Triple13 Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://powerspace.com/fr/privacy/" target="_blank" rel="nofollow">Powerspace</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.nexx360.io/en/940-2/" target="_blank" rel="nofollow">Nexx360</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.spearad.com/privacy61f1c041" target="_blank" rel="nofollow">SpearAd GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.jivox.com/privacy" target="_blank" rel="nofollow">Jivox Corporation</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.lotame.com/about-lotame/privacy/lotame-corporate-websites-privacy-policy/" target="_blank" rel="nofollow">Lotame Solutions, inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.tappx.com/en/privacy-policy/" target="_blank" rel="nofollow">: Tappx</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ensighten.com/privacy-policy/" target="_blank" rel="nofollow">Ensighten</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.octaive.com/privacy" target="_blank" rel="nofollow">Octaive Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://risecodes.com/privacy" target="_blank" rel="nofollow">TypeA Holdings Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://justpremium.com/privacy-policy/" target="_blank" rel="nofollow">Justpremium BV</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adyoulike.com/pages/privacy" target="_blank" rel="nofollow">ADYOULIKE SA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.insticator.com/privacy/" target="_blank" rel="nofollow">Insticator, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adsocy.com/politica-de-privacidad-y-aviso-legal/" target="_blank" rel="nofollow">ADSOCY</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://doc.good-loop.com/policy/privacy-policy.html" target="_blank" rel="nofollow">Good-Loop Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://api.adtube.no/resources/docs/privacy_policy_AppConnect.pdf" target="_blank" rel="nofollow">Adtube AS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://cleveradvertising.com/privacy" target="_blank" rel="nofollow">Clever Advertising, Lda.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://affilae.com/en/privacy-cookie-policy" target="_blank" rel="nofollow">NETILUM (AFFILAE)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://onedash.com/privacy-policy.html" target="_blank" rel="nofollow">VEXPRO TECHNOLOGIES LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://leadsrx.com/privacy" target="_blank" rel="nofollow">LeadsRx, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.advisible.com/privacy " target="_blank" rel="nofollow">Advisible AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://digitalaudience.io/legal/" target="_blank" rel="nofollow">digitalAudience</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.welect.de/datenschutz" target="_blank" rel="nofollow">Welect GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.taptapnetworks.com/privacy_policy/" target="_blank" rel="nofollow">TAPTAP Digital SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.engageya.com/privacy" target="_blank" rel="nofollow">Beaconspark Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://viads.com/privacy-policy" target="_blank" rel="nofollow">VIADS ADVERTISING S.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://next14.com/media/privacy" target="_blank" rel="nofollow">Next Media SRL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adup-tech.com/privacy" target="_blank" rel="nofollow">Axel Springer Teaser Ad GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.united-internet-media.de/de/datenschutzhinweis/" target="_blank" rel="nofollow">United Internet Media GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://wearemiq.com/privacy-policy/" target="_blank" rel="nofollow">MiQ</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.tritondigital.com/privacy-policies" target="_blank" rel="nofollow">Triton Digital Canada Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://public.arcspire.io/privacy.pdf" target="_blank" rel="nofollow">Arcspire Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://legal.trendstream.net/non-panellist_privacy_policy" target="_blank" rel="nofollow">GlobalWebIndex</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://en.betweenx.com/pdata.pdf" target="_blank" rel="nofollow">Between Exchange</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://airgid.io/privacy-policy" target="_blank" rel="nofollow">AirGrid LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.numbereight.ai/privacy" target="_blank" rel="nofollow">NumberEight Technologies Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.kantar.com/cookies-policies" target="_blank" rel="nofollow">The Kantar Group Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mgid.com/privacy-policy" target="_blank" rel="nofollow">MGID Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.seznam.cz/ochranaudaju" target="_blank" rel="nofollow">Seznam.cz, a.s.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.viewdeos.com/privacy-policy" target="_blank" rel="nofollow">Viewdeos 2015 LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.epsilon.com/emea/privacy-policy" target="_blank" rel="nofollow">Epsilon</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.gemius.com/cookie-policy.html" target="_blank" rel="nofollow">Gemius SA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://vidoomy.com/privacy-policy.html" target="_blank" rel="nofollow">Vidoomy Media SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://pay-per-leads.com/terms" target="_blank" rel="nofollow">Mars Media Group</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.objectiveplatform.com/cookie-policy-and-privacy-statement/" target="_blank" rel="nofollow">Objective Partners BV</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mobkoi.com/Ad-Platform-Privacy-Policy.pdf" target="_blank" rel="nofollow">Mobkoi Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sirdata.com/en/Privacy" target="_blank" rel="nofollow">Sirdata</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://rgpd-smartclip.com/" target="_blank" rel="nofollow">Smartclip Hispania SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://notify-group.com/en/mentions-legales/" target="_blank" rel="nofollow">Notify</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://yougov.co.uk/about/terms-combined/#/privacy" target="_blank" rel="nofollow">YouGov</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.vidstart.com/wp-content/uploads/2018/09/PrivacyPolicyPDF-Vidstart.pdf" target="_blank" rel="nofollow">Vidstart LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://docs.prebid.org/privacy.html" target="_blank" rel="nofollow">Prebid.org</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.goodeed.com/knowmore/privacypolicy" target="_blank" rel="nofollow">Goodeed</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://admixplay.com/privacypolicy/" target="_blank" rel="nofollow">WAM Group Ltd, t/a Admix</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.collectiveuk.com/privacy.html" target="_blank" rel="nofollow">Collective Europe Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.inmobi.com/privacy-policy-for-eea" target="_blank" rel="nofollow">InMobi Pte Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://permutive.com/privacy/" target="_blank" rel="nofollow">Permutive Technologies, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.invidi.com/wp-content/uploads/2020/02/ad-tech-services-privacy-policy.pdf" target="_blank" rel="nofollow">INVIDI technologies AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adnanny.com/en/privacy/" target="_blank" rel="nofollow">adnanny.com SLU</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://cafemedia.com/publisher-advertising-privacy-policy/" target="_blank" rel="nofollow">CMI Marketing, Inc. d/b/a CafeMedia</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adikteev.com/privacy" target="_blank" rel="nofollow">Adikteev</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://teemo.co/privacy-policy/" target="_blank" rel="nofollow">Teemo SA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.smartstream.tv/en/productprivacy" target="_blank" rel="nofollow">SMARTSTREAM.TV GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.upwave.com/privacy-policy/" target="_blank" rel="nofollow">Upwave Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mediavine.com/privacy-policy" target="_blank" rel="nofollow">Mediavine, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.jsdelivr.com/terms/privacy-policy-jsdelivr-net" target="_blank" rel="nofollow">jsdelivr.com</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://connectadrealtime.com/privacy/" target="_blank" rel="nofollow">ConnectAd Realtime GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bannerflow.com/privacy " target="_blank" rel="nofollow">Bannerflow AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://digiseg.io/privacy-center/" target="_blank" rel="nofollow">Digiseg ApS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://global.com/privacy-policy/" target="_blank" rel="nofollow">Global Media &amp; Entertainment Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://cynapsis.de/impressum/index.html#datenschutz_d" target="_blank" rel="nofollow">cynapsis interactive GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.inis.pl/polityka-prywatnosci" target="_blank" rel="nofollow">INIS sp. zo.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.finect.com/terminos-legales/politica-de-cookies" target="_blank" rel="nofollow">Noster Finance S.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://kiosked.com/privacy-policy/" target="_blank" rel="nofollow">Kiosked Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adverticum.net/english/privacy-and-data-processing-information/" target="_blank" rel="nofollow">Adverticum cPlc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ivo.io/privacy/" target="_blank" rel="nofollow">IVO Media Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.kwanko.com/fr/rgpd/" target="_blank" rel="nofollow">Kwanko</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.en.audiencenetwork.pl/internet-advertising-privacy-policy" target="_blank" rel="nofollow">Audience Network</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.dianomi.com/legal/privacy.epl" target="_blank" rel="nofollow">Dianomi ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.flexserve.ch/privacy/" target="_blank" rel="nofollow">zillian sa</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mirando.de/datenschutz/" target="_blank" rel="nofollow">Mirando GmbH &amp; Co KG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.stackadapt.com/privacy" target="_blank" rel="nofollow">StackAdapt</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://gobrowsi.com/privacy-policy/" target="_blank" rel="nofollow">Browsi</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.shemedia.com/ad-services-privacy-policy" target="_blank" rel="nofollow">SheMedia, LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.crowdynews.com/privacy-policy/" target="_blank" rel="nofollow">Crowdy News Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://emxdigital.com/privacy/" target="_blank" rel="nofollow">EMX Digital LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://remerge.io/privacy-policy.html" target="_blank" rel="nofollow">remerge GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.goldenbees.fr/en/privacy-charter/" target="_blank" rel="nofollow">Golden Bees</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://proxi.cloud/privacy-policy/" target="_blank" rel="nofollow">Proxi.cloud sp. z.o.o</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://ubermedia.com/summary-of-privacy-policy/" target="_blank" rel="nofollow">UberMedia, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.rms.de/datenschutz/" target="_blank" rel="nofollow">RMSi Radio Marketing Service interactive GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://listonic.com/privacy/" target="_blank" rel="nofollow">Listonic Sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mediarithmics.com/en-us/content/privacy-policy" target="_blank" rel="nofollow">mediarithmics SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://admin.pubwise.io/publisher/privacypolicy" target="_blank" rel="nofollow">PubWise, LLLP</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.pmlatam.com/privacy-policy" target="_blank" rel="nofollow">PML Innovative Media</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.cxense.com/about-us/privacy-policy" target="_blank" rel="nofollow">Piano Software Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://relay42.com/privacy" target="_blank" rel="nofollow">Relay42 Netherlands B.V.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://explorestack.com/privacy-policy/" target="_blank" rel="nofollow">BidMachine Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://getpublica.com/privacy/" target="_blank" rel="nofollow">Publica LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.skaze.com/fr/politique/politique-de-confidentialite/" target="_blank" rel="nofollow">Skaze</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.apptv.com/privacy-policy" target="_blank" rel="nofollow">appTV Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://wemass.com/privacidad/" target="_blank" rel="nofollow">WEMASS MEDIA AUDIENCE SAFE SOLUTIONS, S.L. </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.locationsciencesgroup.ai/privacy-policy/" target="_blank" rel="nofollow">Location Sciences AI Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.goal.com/en-gb/legal/privacy-policy" target="_blank" rel="nofollow">Footballco Media Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://privacy.cuebiq.com" target="_blank" rel="nofollow">Cuebiq</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.gamoshi.com/privacy-policy" target="_blank" rel="nofollow">Gamoshi Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.onaudience.com/internet-advertising-privacy-policy" target="_blank" rel="nofollow">OnAudience Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.heimspiel.de/privacy-policy-iab-vendor/" target="_blank" rel="nofollow">HEIMSPIEL Medien GmbH &amp; Co KG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://app.torchad.com/advertiser/privacy" target="_blank" rel="nofollow">Unmatched Solutions Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://lunamedia.io/privacy-policy/" target="_blank" rel="nofollow">Luna Media Group LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.inmobi.com/privacy-policy-for-eea" target="_blank" rel="nofollow">AerServ LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.vectaury.io/en/personal-data" target="_blank" rel="nofollow">VECTAURY</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://appreciate.mobi/page.html#/end-user-privacy-policy" target="_blank" rel="nofollow">Triapodi Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.norstatpanel.com/en/data-protection" target="_blank" rel="nofollow">Norstat AS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.xandr.com/privacy/platform-privacy-policy/" target="_blank" rel="nofollow">Xandr, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://madvertise.com/en/gdpr/" target="_blank" rel="nofollow">MADVERTISE MEDIA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.infiniamobile.com/avisopolitica.html#pri" target="_blank" rel="nofollow">INFINIA MOBILE S.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.businessclick.com/documents/regulamin_bc_2020.pdf" target="_blank" rel="nofollow">BusinessClick</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://cazamba.com/platform-privacy/" target="_blank" rel="nofollow">Cazamba Serviços de Internet Ltda</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://uzerly.fr/terms-and-conditions/" target="_blank" rel="nofollow">CIBLECLIC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.glimpseprotocol.io/vault-privacy-policy" target="_blank" rel="nofollow">Glimpse Protocol Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://onprospects.com/privacy-policy" target="_blank" rel="nofollow">OnProspects Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.beeswax.com/privacy/" target="_blank" rel="nofollow">BeeswaxIO Corporation</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://studio.nws.ai/privacy" target="_blank" rel="nofollow">Newsroom AI Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.cognitivemarketing.tid.es/" target="_blank" rel="nofollow">Telefonica Investigación y Desarrollo S.A.U</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://audienzz.ch/wp-content/uploads/2020/03/AGB_audienzz_2020.pdf" target="_blank" rel="nofollow">Audienzz AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://bealion.com/politica-de-cookies" target="_blank" rel="nofollow">ANINPRO-CREATIVE, S.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.pokkt.com/privacy" target="_blank" rel="nofollow">Maiden Marketing Pte Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://policy.openmobi.pl/ " target="_blank" rel="nofollow">adQuery</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.hypertvx.com/privacy/" target="_blank" rel="nofollow">HyperTV Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adality.de/en/privacy/" target="_blank" rel="nofollow">adality GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://abtshield.com/privacy-policy/" target="_blank" rel="nofollow">EDGE NPD Sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.gadsme.com/privacy-policy/" target="_blank" rel="nofollow">GADSME</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.geoprove.io/?page_id=222" target="_blank" rel="nofollow">GeoProve</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://konodrac.com/politica-privacidad/" target="_blank" rel="nofollow">Konodrac S.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://projectagora.com/privacy-policy/project-agora-platform/" target="_blank" rel="nofollow">Project Agora Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.singlespot.com/privacy_policy?locale=fr" target="_blank" rel="nofollow">SINGLESPOT SAS </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.kupona.de/dsgvo/" target="_blank" rel="nofollow">KUPONA GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://purelocalmedia.de/?page_id=593" target="_blank" rel="nofollow">Pure Local Media GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://trinityaudio.ai/privacy-policy/" target="_blank" rel="nofollow">Trinity Audio</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://iprom.eu/privacy_policy/GDPR" target="_blank" rel="nofollow">iPROM</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://vmg.nyc/privacy" target="_blank" rel="nofollow">Velocity Made Good LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.groupm.com/privacy-notice" target="_blank" rel="nofollow">GroupM UK Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://doubleverify.com/privacy-notice/" target="_blank" rel="nofollow">DoubleVerify Inc.​</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.optomaton.com/privacy.html" target="_blank" rel="nofollow">Ve Global UK Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://missena.com/confidentialite/" target="_blank" rel="nofollow">MISSENA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adux.com/donnees-personnelles/" target="_blank" rel="nofollow">ADUX</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.lifesight.io/privacy-policy/" target="_blank" rel="nofollow">Lifesight Pte. Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://api.recod3suite.com/privacypolicy.php" target="_blank" rel="nofollow">Nubo LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.yieldmo.com/privacy/" target="_blank" rel="nofollow">Yieldmo, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bucksense.com/platform-privacy-policy/" target="_blank" rel="nofollow">Bucksense Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.inskinmedia.com/privacy-policy.html" target="_blank" rel="nofollow">Inskin Media LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://s.on-device.com/privacyPolicy" target="_blank" rel="nofollow">On Device Research Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.agof.de/datenschutz/" target="_blank" rel="nofollow">agof studies</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.remixd.com/privacy_policy.html" target="_blank" rel="nofollow">Remixd Media, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.spotx.tv/privacy-policy/" target="_blank" rel="nofollow">SpotX, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://eu.dynadmic.com/privacy-policy/" target="_blank" rel="nofollow">DynAdmic</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adsafety.net/privacy.html" target="_blank" rel="nofollow">Online Solution</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.durationmedia.net/privacy-policy" target="_blank" rel="nofollow">Duration Media, LLC.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://integralads.com/privacy-policy/" target="_blank" rel="nofollow">Integral Ad Science, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adludio.com/privacypolicy" target="_blank" rel="nofollow">Adludio Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ad-alliance.de/datenschutz/" target="_blank" rel="nofollow">Ad Alliance GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ebayinc.com/company/privacy-center/gdpr/" target="_blank" rel="nofollow">eBay Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adara.com/privacy-promise/" target="_blank" rel="nofollow">ADARA MEDIA UNLIMITED</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.thetradedesk.com/general/privacy-policy" target="_blank" rel="nofollow">The Trade Desk</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.zemanta.com/legal/privacy" target="_blank" rel="nofollow">Zemanta, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://armis.tech/en/armis-personal-data-privacy-policy/" target="_blank" rel="nofollow">ARMIS SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://cms.brid.tv/pages/view/privacy" target="_blank" rel="nofollow">Brid Video DOO</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.enterprise.noddus.com/privacy-policy" target="_blank" rel="nofollow">SNAPUPP TECHNOLOGIES SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adpone.com/privacy-policy/" target="_blank" rel="nofollow">Adpone SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://cluep.com/privacy" target="_blank" rel="nofollow">Cluep LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://n.rich/privacy-notice" target="_blank" rel="nofollow">N Technologies Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.smartology.net/privacy-policy/" target="_blank" rel="nofollow">Smartology Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://zetaglobal.com/privacy-policy/" target="_blank" rel="nofollow">Zeta Global</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.tangoomedia.com/website_privacypolicy" target="_blank" rel="nofollow">Tangoo Srl</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.usemax.de/?l=privacy" target="_blank" rel="nofollow">usemax advertisement (Emego GmbH)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adtonos.com/service-privacy-policy/" target="_blank" rel="nofollow">Radio Net Media Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.marfeel.com/docs/compass/privacy/policy/" target="_blank" rel="nofollow">Marfeel Solutions, SL (Compass)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ibillboard.com/en/privacy-information/" target="_blank" rel="nofollow">Internet BillBoard a.s.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sunmedia.tv/en/cookies" target="_blank" rel="nofollow">SunMedia </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adbility-media.com/datenschutzerklaerung/" target="_blank" rel="nofollow">adbility media GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://privacy.timeonegroup.com" target="_blank" rel="nofollow">TIMEONE PERFORMANCE</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://avocet.io/privacy-portal" target="_blank" rel="nofollow">Avocet Systems Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.teads.com/privacy-policy/" target="_blank" rel="nofollow">Teads </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://samba.tv/legal/privacy-policy/" target="_blank" rel="nofollow">Samba TV UK Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://revx.io/privacy-policy" target="_blank" rel="nofollow">RevX</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.spotible.com/privacy.php" target="_blank" rel="nofollow">Spotible</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bigabid.com/Legal/" target="_blank" rel="nofollow">Bigabid Media ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.twiago.com/datenschutz/" target="_blank" rel="nofollow">twiago GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://impact.com/privacy-policy/" target="_blank" rel="nofollow">Impact Tech Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://6sense.com/privacy-policy/" target="_blank" rel="nofollow">6Sense Insights, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://docs.roku.com/published/userprivacypolicy/en/us" target="_blank" rel="nofollow">Roku Advertising Services</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mediamath.com/privacy-policy/" target="_blank" rel="nofollow">MediaMath, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://mobpro.com/privacy.html" target="_blank" rel="nofollow">Mobile Professionals BV</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.audiomob.io/privacy" target="_blank" rel="nofollow">AUDIOMOB LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://britepool.com/gdpr-privacy-notice" target="_blank" rel="nofollow">BritePool Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://somplo.com/privacy-policy/" target="_blank" rel="nofollow">Somplo Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://simpli.fi/site-privacy-policy/" target="_blank" rel="nofollow">Simplifi Holdings Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.audio-cc.com/audiocc_privacy_policy.pdf" target="_blank" rel="nofollow">audio content &amp; control GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://kervit.com/privacy-policy/" target="_blank" rel="nofollow">Grabit Interactive Media Inc dba KERV Interctive</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.target-video.com/datenschutz/" target="_blank" rel="nofollow">TargetVideo GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.audiencerun.com/privacy-policy" target="_blank" rel="nofollow">AudienceRun corp</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adwmg.com/privacy-policy/" target="_blank" rel="nofollow">adWMG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.demandbase.com/privacy-policy/" target="_blank" rel="nofollow">Demandbase, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.otto.de/shoppages/service/datenschutz" target="_blank" rel="nofollow">Otto (GmbH &amp; Co KG)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.audiencerate.com/data-ethics-privacy/" target="_blank" rel="nofollow">Audiencerate LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.marketperf.com/assets/images/app/marketperf/pdf/privacy-policy.pdf" target="_blank" rel="nofollow">MARKETPERF CORP</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.oracle.com/legal/privacy/services-privacy-policy.html" target="_blank" rel="nofollow">Oracle Data Cloud - Moat</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://en.yeahmobi.com/html/privacypolicy/" target="_blank" rel="nofollow">Click Tech Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://yieldlift.com/privacy-policy.html" target="_blank" rel="nofollow">YieldLift LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://privacy.polar.me" target="_blank" rel="nofollow">Polar Mobile Group Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ad6media.fr/privacy" target="_blank" rel="nofollow">ad6media</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.innity.com/privacy-policy.php" target="_blank" rel="nofollow">INNITY</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adhese.com/privacy-and-cookie-policy" target="_blank" rel="nofollow">Adhese</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://triplelift.com/privacy/" target="_blank" rel="nofollow">TripleLift, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.flashtalking.com/privacypolicy/" target="_blank" rel="nofollow">Flashtalking, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.deepintent.com/platform-privacy-policy/" target="_blank" rel="nofollow">DeepIntent, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.distroscale.com/privacy-policy/" target="_blank" rel="nofollow">DistroScale, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bidberrymedia.com/privacy-policy/" target="_blank" rel="nofollow">BidBerry SRL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://clinch.co/privacy-policy" target="_blank" rel="nofollow">Clinch Labs LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.vitrado.de/datenschutz" target="_blank" rel="nofollow">vitrado GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.confiant.com/privacy" target="_blank" rel="nofollow">Confiant Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.captifytechnologies.com/privacy-notice/" target="_blank" rel="nofollow">Captify Technologies Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.neory.com/privacy.html" target="_blank" rel="nofollow">NEORY GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://bombora.com/privacy" target="_blank" rel="nofollow">Bombora Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bidstack.com/privacy-policy/" target="_blank" rel="nofollow">Bidstack Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://v3.adhood.com/en/site/politikavekurallar/gizlilik.php?lang=en" target="_blank" rel="nofollow">adhood.com</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://byinspired.com/privacypolicy.pdf" target="_blank" rel="nofollow">Inspired Mobile Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.getquanty.com/mentions-legales/" target="_blank" rel="nofollow">SMARTLINE SYSTEMS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mars.com/privacy" target="_blank" rel="nofollow">Mars Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://consumable.com/privacy-policy.html" target="_blank" rel="nofollow">Consumable, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.nielsen.com/eu/en/legal/privacy-statement/digital-measurement/" target="_blank" rel="nofollow">Nielsen LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://blockthrough.com/privacy-policy/" target="_blank" rel="nofollow">Blockthrough, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://vdx.tv/privacy/" target="_blank" rel="nofollow">Exponential Interactive, Inc d/b/a VDX.tv</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.magnite.com/legal/advertising-technology-privacy-policy/" target="_blank" rel="nofollow">Magnite, Inc. </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adtheorent.com/privacy-policy" target="_blank" rel="nofollow">AdTheorent, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mobfox.com/privacy-policy/" target="_blank" rel="nofollow">Mobfox US LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.pressboardmedia.com/privacy-policy" target="_blank" rel="nofollow">Pressboard Media Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://admixer.com/privacy/" target="_blank" rel="nofollow">Admixer EU GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mrpfd.com/privacy-policy/" target="_blank" rel="nofollow">Market Resource Partners LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://appconsent.io/en/privacy-policy" target="_blank" rel="nofollow">XChange by SFBX®</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.awin.com/gb/privacy" target="_blank" rel="nofollow">AWIN AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sevenonemedia.de/datenerhebung-anderer-dienstleister" target="_blank" rel="nofollow">SOMQUERY SOMTAG - (SevenOne Media)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.improvedigital.com/platform-privacy-policy" target="_blank" rel="nofollow">Improve Digital BV</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.signal.co/privacy-policy/" target="_blank" rel="nofollow">Signal Digital Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://opinary.com/privacy-policy/" target="_blank" rel="nofollow">Opinary GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.deutschepost.de/de/c/consentric/datenschutz.html" target="_blank" rel="nofollow">Deutsche Post AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://getbring.com/en/legal/privacy.html" target="_blank" rel="nofollow">Bring! Labs AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://persona.ly/privacy_dsp" target="_blank" rel="nofollow">Persona.ly</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://recreativ.com/policy" target="_blank" rel="nofollow">AA INTERNET-MEDIA Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.scorecardresearch.com/privacy.aspx?newlanguage=1" target="_blank" rel="nofollow">Comscore B.V.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.knorex.com/privacy" target="_blank" rel="nofollow">Knorex</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://vidazoo.gitbook.io/vidazoo-legal/privacy-policy" target="_blank" rel="nofollow">Vidazoo Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://jswebproduction.com/vie-privee.php" target="_blank" rel="nofollow">JS Web Production</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.spoods.info/#gdpr" target="_blank" rel="nofollow">Spoods GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://dugout.com/privacy-policy" target="_blank" rel="nofollow">Dugout Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.cloudtechnologies.pl/en/internet-advertising-privacy-policy" target="_blank" rel="nofollow">Cloud Technologies S.A.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://delivered-by-madington.com/dat-privacy-policy/" target="_blank" rel="nofollow">Madington</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://luc.id/privacy-policy/" target="_blank" rel="nofollow">Lucid Holdings, LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://preciso.net/privacy/" target="_blank" rel="nofollow">PRECISO SRL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://vrtcal.com/docs/PrivacyPolicy-Advertising.pdf" target="_blank" rel="nofollow">VRTCAL Markets Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://wearesilverbullet.com/privacy-policy/" target="_blank" rel="nofollow">Silverbullet Data Services Group</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bricks-co.com/confidentialite" target="_blank" rel="nofollow">BRICKS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://corp.bandsintown.com/privacy" target="_blank" rel="nofollow">Bandsintown Amplified LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://bam-interactive.de/datenschutz/" target="_blank" rel="nofollow">bam! interactive marketing GmbH </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://help.disqus.com/en/articles/1717103-disqus-privacy-policy" target="_blank" rel="nofollow">Disqus</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://iqm.com/privacy-policy" target="_blank" rel="nofollow">IQM CORPORATION</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://scenestealer.tv/privacy-policy/" target="_blank" rel="nofollow">Scene Stealer Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.cedato.com/privacy-policy/" target="_blank" rel="nofollow">Cedato Technologies Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adways.com/privacy-policy?lang=en" target="_blank" rel="nofollow">ADWAYS SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://policies.google.com/privacy" target="_blank" rel="nofollow">Google Advertising Products</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.amazon.co.uk/gp/help/customer/display.html?nodeId=201909010" target="_blank" rel="nofollow">Amazon Advertising</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.strossle.com/privacy-policy" target="_blank" rel="nofollow">Strossle International AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.converto.com/datenschutz-privacy-policy" target="_blank" rel="nofollow">Converto AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://mediatrust.com/privacy-statement/" target="_blank" rel="nofollow">TMT Digital Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.instytut-pollster.pl/privacy-policy/" target="_blank" rel="nofollow">Accorp Sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://telaria.com/privacy-policy/" target="_blank" rel="nofollow">Telaria, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bmind.es/legal-notice/" target="_blank" rel="nofollow">Bmind a Sales Maker Company, S.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.aniview.com/privacy-policy/" target="_blank" rel="nofollow">Aniview LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://numberly.com/en/privacy/" target="_blank" rel="nofollow">numberly</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adrenalead.com/politique-de-protection-des-donnees/" target="_blank" rel="nofollow">ADRENALEAD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://7pass.de/datenschutzbestimmungen.html" target="_blank" rel="nofollow">ProSiebenSat.1 Digital Data GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://mobilefuse.com/privacy-policy/" target="_blank" rel="nofollow">MobileFuse LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.skoiy.com/en/privacy-policy/" target="_blank" rel="nofollow">Skoiy</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.gamned.com/privacy-policy/" target="_blank" rel="nofollow">Gamned</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.scalemonk.com/privacy-policy/index.html" target="_blank" rel="nofollow">ScaleMonk Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://jetpack.net/privacy" target="_blank" rel="nofollow">Jetpack Digital LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mp-newmedia.com/datenschutz" target="_blank" rel="nofollow">M,P,NEWMEDIA, GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://apester.com/privacy-policy/" target="_blank" rel="nofollow">Apester Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://drbanner.com/privacypolicy_en/" target="_blank" rel="nofollow">Mediakeys Platform</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adsolutions.com/privacy-policy/" target="_blank" rel="nofollow">Adsolutions BV</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.factor-eleven.de/datenschutz/" target="_blank" rel="nofollow">Factor Eleven GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://quartermedia.de/daten/" target="_blank" rel="nofollow">QUARTER MEDIA GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.freshclip.de/datenschutzerklaerung/" target="_blank" rel="nofollow">Freshclip GmbH &amp; Co. KG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.nielsen.com/us/en/legal/privacy-statement/nielsen-marketing-cloud-privacy-notice/" target="_blank" rel="nofollow">Nielsen Marketing Cloud</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://collector.brandmetrics.com/brandmetrics_privacypolicy.pdf" target="_blank" rel="nofollow">Brand Metrics Sweden AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.molocoads.com/privacy-policy" target="_blank" rel="nofollow">Moloco, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.respondi.com/EN/privacy" target="_blank" rel="nofollow">respondi AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mintegral.com/en/privacy/" target="_blank" rel="nofollow">Mintegral international limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://paypersale.ru/index/privacy#about" target="_blank" rel="nofollow">Paypersale.ru</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://axiommedia.co/useful-info/axiom-media-limited-privacy-policy/" target="_blank" rel="nofollow">Axiom Media Connect</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.kmtx.com/privacy/" target="_blank" rel="nofollow">Keymantics</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://readpeak.com/privacy-policy/" target="_blank" rel="nofollow">Readpeak Oy</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://carbonrmp.com/privacy.html" target="_blank" rel="nofollow">Carbon (AI) Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://reignn.com/user-privacy-policy" target="_blank" rel="nofollow">Reignn Platform Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.themediagrid.com/privacy-policy/" target="_blank" rel="nofollow">The MediaGrid Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.geoedge.com/privacy-policy/" target="_blank" rel="nofollow">GeoEdge</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://kargo.com/privacy" target="_blank" rel="nofollow">Kargo Global Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://mobility-ads.de/datenschutz/" target="_blank" rel="nofollow">Mobility-Ads GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sync.tv/privacy.html" target="_blank" rel="nofollow">SYNC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.primis.tech/privacy-policy/" target="_blank" rel="nofollow">McCann Discipline LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.oracle.com/legal/privacy/marketing-cloud-data-cloud-privacy-policy.html" target="_blank" rel="nofollow">Oracle Data Cloud</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.alliancegravity.com/politiquedeprotectiondesdonneespersonnelles" target="_blank" rel="nofollow">Alliance Gravity Data Media</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://42ads.io/42privacy.pdf" target="_blank" rel="nofollow">42 Ads GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://mediaintelligence.de/privacy-policy.do" target="_blank" rel="nofollow">Amnet GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adalyser.com/en/terms" target="_blank" rel="nofollow">Onesoon Limited t/a Adalyser</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://privacy.hurra.com/tcf/" target="_blank" rel="nofollow">Hurra Communications GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://blingby.com/privacy" target="_blank" rel="nofollow">Blingby LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.1plusx.com/privacy-policy/" target="_blank" rel="nofollow">1plusX AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mainad.com/privacy-policy/" target="_blank" rel="nofollow">mainADV Srl</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.criteo.com/privacy/" target="_blank" rel="nofollow">Criteo SA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.admedo.com/privacy-policy" target="_blank" rel="nofollow">Admedo Technology Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://bannernow.com/privacy" target="_blank" rel="nofollow">Bannernow, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.blis.com/privacy/" target="_blank" rel="nofollow">Blis Media Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://soundcast.fm/en/data-privacy" target="_blank" rel="nofollow">SoundCast</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.vlyby.com/product-privacy" target="_blank" rel="nofollow">VLYBY Digital GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.thenewco.it/privacy_policy_servizi_prodotti.html" target="_blank" rel="nofollow">THE NEWCO S.R.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.taboola.com/privacy-policy" target="_blank" rel="nofollow">Taboola Europe Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.communicationads.net/aboutus/privacy/" target="_blank" rel="nofollow">communicationAds GmbH &amp; Co. KG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.addapptr.com/data-privacy" target="_blank" rel="nofollow">AddApptr GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.cint.com/participant-privacy-notice" target="_blank" rel="nofollow">Cint AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://mediasmart.io/privacy/" target="_blank" rel="nofollow">Mediasmart Mobile S.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://help.sensic.net/privacypolicy_en.html" target="_blank" rel="nofollow">GfK SE</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://feedad.com/privacy/" target="_blank" rel="nofollow">FeedAd GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://verve.com/privacy-policy/index.html" target="_blank" rel="nofollow">VGI CTV, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.caroda.io/privacy-statement" target="_blank" rel="nofollow">Caroda s.r.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://solution.coupons/privacy" target="_blank" rel="nofollow">Solution coupons</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.smaato.com/privacy/" target="_blank" rel="nofollow">Smaato, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://ozoneproject.com/privacy-policy" target="_blank" rel="nofollow">The Ozone Project Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adobe.com/privacy/policy.html" target="_blank" rel="nofollow">Adobe Audience Manager, Adobe Experience Platform</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adserve.zone/adserveprivacypolicy.html" target="_blank" rel="nofollow">Adserve.zone / Artworx AS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://odeeo.io/privacy-policy/" target="_blank" rel="nofollow">Sonic Odeeo ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.beintoo.com/privacy-cookie-policy/" target="_blank" rel="nofollow">BEINTOO SPA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mindtake.com/en/reppublika-privacy-policy" target="_blank" rel="nofollow">MindTake Research GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.lead-alliance.net/dataprotection2" target="_blank" rel="nofollow">lead alliance GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://3q.video/de/datenschutz_und_richtlinien" target="_blank" rel="nofollow">3Q nexx GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://gumgum.com/privacy-policy" target="_blank" rel="nofollow">GumGum, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://clipcentric.com/privacy.bhtml" target="_blank" rel="nofollow">Clipcentric, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.makethunder.com/privacy" target="_blank" rel="nofollow">PaperG, Inc. dba Thunder Industries</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.kairosfire.com/privacy" target="_blank" rel="nofollow">Kairos Fire</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.admo.tv/en/privacy-policy" target="_blank" rel="nofollow">Admo.tv (Clickon)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.avantisvideo.com/privacy-policy/" target="_blank" rel="nofollow">Avantis Video Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.arkheus.fr/mentions-legales/" target="_blank" rel="nofollow">ARKHEUS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adex.com/privacy" target="_blank" rel="nofollow">Samoukale Enterprises Limited dba ADEX</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.reppublika.com/privacy-policy" target="_blank" rel="nofollow">Reppublika- The Research Toolbox GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adition.com/en/privacy-platform" target="_blank" rel="nofollow">ADITION technologies AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://platform161.com/cookie-and-privacy-policy/" target="_blank" rel="nofollow">Platform161 B.V.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.jadudamobile.com/datenschutzerklaerung/" target="_blank" rel="nofollow">Jaduda GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.flexoffers.com/privacy-policy/" target="_blank" rel="nofollow">Flexoffers.com, LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://datmean.com/politica-privacidad/" target="_blank" rel="nofollow">Programatica de publicidad S.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://qwarry.com/imprint/" target="_blank" rel="nofollow">Squared SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mediago.io/policy/" target="_blank" rel="nofollow">Baidu USA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.stroeer.de/konvergenz-konzepte/daten-technologien/stroeer-ssp/datenschutz-ssp.html" target="_blank" rel="nofollow">Ströer SSP GmbH (SSP)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.celtra.com/privacy-policy/" target="_blank" rel="nofollow">Celtra, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.optomaton.com/privacy.html" target="_blank" rel="nofollow">Optomaton UG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.meetrics.com/en/data-privacy/" target="_blank" rel="nofollow">Meetrics GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adobe.com/privacy/experience-cloud.html" target="_blank" rel="nofollow">Adobe Advertising Cloud</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://beachfront.com/privacy-policy/" target="_blank" rel="nofollow">Beachfront Media LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://near.co/privacy" target="_blank" rel="nofollow">Near Pte Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.situ8ed.com/privacy-policy/" target="_blank" rel="nofollow">SITU8ED SA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://loopme.com/privacy-policy/" target="_blank" rel="nofollow">LoopMe Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adrule.net/de/datenschutz/" target="_blank" rel="nofollow">adrule mobile GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adman.gr/privacy" target="_blank" rel="nofollow">ADMAN - Phaistos Networks, S.A.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://dataxtrade.com/de/privacy.html" target="_blank" rel="nofollow">dataXtrade GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.indexexchange.com/privacy" target="_blank" rel="nofollow">Index Exchange, Inc. </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.eyeota.com/privacy-center" target="_blank" rel="nofollow">Eyeota Pte Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.antvoice.com/en/privacypolicy/" target="_blank" rel="nofollow">AntVoice</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://cav.ai/privacy-policy/" target="_blank" rel="nofollow">Cavai AS &amp; UK </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.fandom.com/privacy-policy" target="_blank" rel="nofollow">Fandom, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mediasquare.fr/e-privacy/" target="_blank" rel="nofollow">Media Square</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://tx.group/de/rechtliche-hinweise" target="_blank" rel="nofollow">TX Group AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adspirit.de/privacy" target="_blank" rel="nofollow">AdSpirit GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://privacy.acuityads.com/corporate-privacy-policy.html" target="_blank" rel="nofollow">AcuityAds Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://aax.media/privacy/" target="_blank" rel="nofollow">AAX LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sportradar.com/about-us/privacy/" target="_blank" rel="nofollow">Sportradar AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bluebillywig.com/privacy-statement/" target="_blank" rel="nofollow">Blue Billywig BV</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.revjet.com/privacy" target="_blank" rel="nofollow">RevJet</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.media.net/privacy-policy/" target="_blank" rel="nofollow">Media.net Advertising FZ-LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://weborama.com/respect-de-la-vie-privee-2-2/" target="_blank" rel="nofollow">Weborama</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adnami.io/privacy-policy-services" target="_blank" rel="nofollow">Adnami Aps</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.acxiom.com/about-us/privacy/" target="_blank" rel="nofollow">Acxiom</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://discover-tech.io/dsp-privacy-policy/" target="_blank" rel="nofollow">Discover-Tech ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.unilevernotices.com/poland/polish/privacy-notice/notice.html" target="_blank" rel="nofollow">Unilever Polska sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://videobyte.com/privacy.html" target="_blank" rel="nofollow">Videobyte Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.unicredit.it/it/info/informativa-cookies.html" target="_blank" rel="nofollow">UniCredit S.p.A.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.venatusmedia.com/privacy/" target="_blank" rel="nofollow">Venatus Media Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bouncex.com/privacy/" target="_blank" rel="nofollow">Bounce Exchange, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://automattic.com/privacy/" target="_blank" rel="nofollow">Automattic Ads</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://hivestack.com/privacy-policy" target="_blank" rel="nofollow">Hivestack Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://zergnet.com/privacy" target="_blank" rel="nofollow">7Hops.com Inc. (ZergNet)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://samba.tv/legal/privacy-policy/" target="_blank" rel="nofollow">Samba TV Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://ex.co/privacy-policy/" target="_blank" rel="nofollow">Playbuzz Ltd (aka EX.CO)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.dataexchanger.pl/privacy-policy" target="_blank" rel="nofollow">Little Big Data sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.nanointeractive.com/privacy-statement/" target="_blank" rel="nofollow">Nano Interactive GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://static.tabmo.io.s3.amazonaws.com/privacy-policy/index.html" target="_blank" rel="nofollow">TabMo SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adswizz.com/our-privacy-policy/" target="_blank" rel="nofollow">AdsWizz Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://digidip.net/privacy-policy" target="_blank" rel="nofollow">digidip GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.insurads.com/privacy.html" target="_blank" rel="nofollow">InsurAds Technologies SA.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://audigent.com/platform-privacy-policy" target="_blank" rel="nofollow">AuDigent</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.netpoint-media.de/technik/datenschutz" target="_blank" rel="nofollow">Netpoint Media GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.gratisbasar.de/privacy-policy" target="_blank" rel="nofollow">Rapid Performance GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adition.com/en/privacy-platform" target="_blank" rel="nofollow">Active Agent (ADITION technologies AG)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://liquidm.com/privacy-policy/" target="_blank" rel="nofollow">LiquidM Technology GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://smadex.com/end-user-privacy-policy/" target="_blank" rel="nofollow">Smadex SL</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.neodatagroup.com/privacy-policy/" target="_blank" rel="nofollow">Neodata Group srl</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://docs.vuukle.com/privacy-and-policy/" target="_blank" rel="nofollow">VUUKLE DMCC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.wearebrandadvance.com/privacy-policy/" target="_blank" rel="nofollow">Brand Advance Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://impact-plus.fr/en/privacy-policy/" target="_blank" rel="nofollow">Impact+</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.muso.com/policies/privacy-policy" target="_blank" rel="nofollow">MUSO TNT LIMITED</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.localsensor.com/privacy.html" target="_blank" rel="nofollow">Localsensor B.V.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://contactimpact.de/privacy" target="_blank" rel="nofollow">Contact Impact GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://beop.io/privacy" target="_blank" rel="nofollow">BeOp</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adnuntius.com/resources/privacy-policy/" target="_blank" rel="nofollow">Adnuntius AS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://web.neural.one/privacy-policy/" target="_blank" rel="nofollow">NEURAL.ONE</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.fyber.com/legal/privacy-policy/" target="_blank" rel="nofollow">Fyber </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://scoota.com/privacy-policy" target="_blank" rel="nofollow">Rockabox Media Ltd t/a Scoota</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://imonomy.com/privacy-policy" target="_blank" rel="nofollow">Imonomy</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.socoto.com/datenschutz/" target="_blank" rel="nofollow">socoto gmbh &amp; co. kg</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.wagawin.com/privacy-en/#productprivacy" target="_blank" rel="nofollow">Wagawin GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://oneplanetonly.com/files/PRIVACY%20POLICY.pdf" target="_blank" rel="nofollow">One Planet Only</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adn.ai/fr/politique-confidentialite-adserver" target="_blank" rel="nofollow">DNA-I.COM</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.contentexchange.me/privacy-policy/" target="_blank" rel="nofollow">I.R.V. D.O.O.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.netzeffekt.de/en/imprint" target="_blank" rel="nofollow">netzeffekt GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.sourcepoint.com/privacy-policy" target="_blank" rel="nofollow">Sourcepoint Technologies, Inc. (non-CMP)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://betterbanners.com/en/privacy" target="_blank" rel="nofollow">Better Banners A/S</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://dynamic-tracking.com/Datenschutz.aspx" target="_blank" rel="nofollow">Dynamic 1001 GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.oan.pl/en/privacy-policy" target="_blank" rel="nofollow">Online Advertising Network Sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.iponweb.com/privacy-policy/" target="_blank" rel="nofollow">IPONWEB GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.tapjoy.com/legal/#privacy-policy" target="_blank" rel="nofollow">Tapjoy, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://sonobi.com/privacy-policy/" target="_blank" rel="nofollow">Sonobi, Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.innovid.com/privacy-policy" target="_blank" rel="nofollow">Innovid Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ingenioustechnologies.com/privacy-policy" target="_blank" rel="nofollow">Ingenious Technologies AG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://allegro.pl/terms/attachment/5" target="_blank" rel="nofollow">Allegro.pl</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.ipromote.com/privacy-policy/" target="_blank" rel="nofollow">2KDirect, Inc. (dba iPromote)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adxperience.com/privacy-policy/" target="_blank" rel="nofollow">Adxperience SAS</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adverty.com/privacy-policy/" target="_blank" rel="nofollow">Adverty AB (publ)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adloox.com/disclaimer" target="_blank" rel="nofollow">Adloox SA</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://rezonence.com/privacy-policy/" target="_blank" rel="nofollow">Rezonence Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://axonix.com/privacy-cookie-policy/" target="_blank" rel="nofollow">Axonix LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bet365affiliates.com/UI/Pages/Affiliates/Affiliates.aspx?ContentPath=%2fAffiliates%2fv2_Root%2finformationPages%2fPrivacyPolicy" target="_blank" rel="nofollow">Hillside (Sports) GP Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.bidtheatre.com/privacy-policy" target="_blank" rel="nofollow">BidTheatre AB</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.quantcast.com/privacy/" target="_blank" rel="nofollow">Quantcast International Limited</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://smartadserver.com/end-user-privacy-policy/" target="_blank" rel="nofollow">Smart Adserver</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://pubmatic.com/privacy-policy/" target="_blank" rel="nofollow">PubMatic, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.frameplay.gg/terms" target="_blank" rel="nofollow">Frameplay Corporation</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.one-count.com/about/privacy-policy-terms/" target="_blank" rel="nofollow">ONEcount</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.home.neustar/privacy" target="_blank" rel="nofollow">NeuStar, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.mobsuccess.com/en/privacy" target="_blank" rel="nofollow">Mobsuccess</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://thebrave.io/private-policy" target="_blank" rel="nofollow">Brave People Ltd.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://site.adform.com/privacy-center/platform-privacy/product-and-services-privacy-policy/" target="_blank" rel="nofollow">Adform</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.outbrain.com/legal/privacy#privacy-policy" target="_blank" rel="nofollow">Outbrain UK Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.emodoinc.com/privacy-policy/" target="_blank" rel="nofollow">1020, Inc. dba Placecast and Ericsson Emodo</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.amillionads.com/privacy-policy" target="_blank" rel="nofollow">A Million Ads Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="nofollow">LinkedIn Ireland Unlimited Company</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adkernel.com/privacy-policy/" target="_blank" rel="nofollow">Adkernel LLC</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://voluumdsp.com/end-user-privacy-policy/" target="_blank" rel="nofollow">CentralNic Poland sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://trg.de/en/privacy-statement/" target="_blank" rel="nofollow">The Reach Group GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.nativo.com/interest-based-ads" target="_blank" rel="nofollow">Nativo, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.whatrocks.co/en/privacy-policy " target="_blank" rel="nofollow">WhatRocks Inc. </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.studio-gong.de/datenschutz.html " target="_blank" rel="nofollow">STUDIO GONG GmbH &amp; Co. Studiobetriebs KG</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.squadata.net/en/private-policy/" target="_blank" rel="nofollow">Digital Squad</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://smartframe.io/privacy-policy/" target="_blank" rel="nofollow">SmartFrame Technologies</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://lifestreet.com/privacy/" target="_blank" rel="nofollow">LifeStreet Corporation</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.onnetwork.tv/pp_services.php" target="_blank" rel="nofollow">Onnetwork Sp. z o.o.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://converge-digital.com/privacy-policy/" target="_blank" rel="nofollow">Converge-Digital</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://onetech.group/en/privacy-policy" target="_blank" rel="nofollow">One Tech Group GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://okube-attribution.com/politique-de-confidentialite/" target="_blank" rel="nofollow">Smart Traffik</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://liftoff.io/privacy-policy/" target="_blank" rel="nofollow">Liftoff Mobile, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.intelliad.de/datenschutzerklaerung/" target="_blank" rel="nofollow">diva-e products </a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://privacy-portal.smartclip.net/" target="_blank" rel="nofollow">smartclip Europe GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="http://adelement.com/privacy-policy.html" target="_blank" rel="nofollow">AdElement Media Solutions Pvt Ltd</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://kayzen.io/data-privacy-policy" target="_blank" rel="nofollow">Kayzen</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.adview.com/policy/privacy" target="_blank" rel="nofollow">AdView</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://iris.ipsos.com/site-centric-privacy/" target="_blank" rel="nofollow">IPSOS MORI UK LTD</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adloop.co/en/privacy-policy/" target="_blank" rel="nofollow">AREIA (ADLOOP)</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://policy.samsungrs.com/consent/eu/privacy_policy_en.html" target="_blank" rel="nofollow">Samsung Ads</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://funkedigital.de/datenschutzerklaerung/" target="_blank" rel="nofollow">FUNKE Digital GmbH</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.openx.com/legal/privacy-policy/" target="_blank" rel="nofollow">OpenX</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://getcake.com/privacy-policy/ " target="_blank" rel="nofollow">CAKE Software, Inc.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://www.exoclick.com/privacy-and-cookies-policy/" target="_blank" rel="nofollow">EXOCLICK, S.L.</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://adelaidelift.com/privacy" target="_blank" rel="nofollow">Adelaide Metrics Inc</a></td>
                    <td>
                        <div></div>
                    </td>
                    <td>
                        <div></div>
                    </td>
                </tr>
                <tr>
                    <td><a href="https://policies.google.com/technologies/partner-sites" target="_blank" rel="nofollow">Google</a></td>
                    <td>
                        <div>Matching Data to Offline Sources</div>
                        <div>Linking Devices</div>
                        <div>Precise Geographic Location Data</div>
                    </td>
                    <td>
                        <div>Necessary</div>
                        <div>Marketing</div>
                        <div>Preference</div>
                        <div>Statistics</div>
                    </td>
                </tr>
            </tbody>
        </table>
        <br>&nbsp;
        <p></p>
        <p><span><strong>Data Usage Purposes</strong></span></p>
        <p><span><strong>Necessary</strong></span></p>
        <p><span>Necessary cookies help make a website usable by enabling basic functions like page navigation and access to secure areas of the website. The website cannot function properly without these cookies.</span></p>
        <p>&nbsp;</p>
        <p><span><strong>Preferences</strong></span></p>
        <p><span>Preference cookies enable a website to remember information that changes the way the website behaves or looks, like your preferred language or the region that you are in.</span></p>
        <p>&nbsp;</p>
        <p><span><strong>Statistics</strong></span></p>
        <p><span>Statistic cookies help website owners to understand how visitors interact with websites by collecting and reporting information anonymously.</span></p>
        <p>&nbsp;</p>
        <p><span><strong>Marketing</strong></span></p>
        <p><span>Marketing cookies are used to track visitors across websites. The intention is to display ads that are relevant and engaging for the individual user and thereby more valuable for publishers and third party advertisers.</span></p>
        <p>&nbsp;</p>
        <p><span><strong>Contacting Us</strong></span></p>
        <p><span>If there are any questions regarding this privacy policy or you wish to unsubscribe from our site and services you may contact us using the information below or by writing to us at:</span></p>
        <p><span><br>
            2885 Sanford Ave<br>
            Grandville, MI 49418<br>
            USA</span>
        </p>
        <p><span><strong>Summary of Requests</strong></span></p>
        <p><span>If you'd like to see a summary of the requests to know user information, requests to delete user information and requests to opt-out of CCPA compliance that this business has received: </span><a href="https://g.ezoic.net/privacy/quizzlybears.com/annualRequestSummary"><span>https://g.ezoic.net/privacy/quizzlybears.com/annualRequestSummary</span></a><span> regarding quizzlybears.com</span></p>
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