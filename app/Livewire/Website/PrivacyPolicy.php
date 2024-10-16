<?php

namespace App\Livewire\Website;

use App\Models\SubscriptionSetting;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('livewire.layouts.website.plans-customization')]
class PrivacyPolicy extends Component
{
    public function render()
    {


        // 1: dependencies
        $settings = SubscriptionSetting::first();







        // A: beHealthy
        if (env('APP_CLIENT') == 'BeHealthy') {




            // 1: main
            $header = ['Be Healthy Restaurant LLC Terms and Conditions', "Welcome to Be Healthy! These Terms and Conditions outline the rules and regulations for the use of Be Healthy's website, products, and services. By accessing this website, we assume you accept these Terms and Conditions in full. Do not continue to use Be Healthy's website or services if you do not agree to all the Terms and Conditions stated on this page"];







            // 1.5: titles
            $titles = ['General Terms', 'Privacy Policy', 'General Privacy Policy', 'Delivery', 'Use of the Website', 'Products and Services', 'Extra Terms and Conditions', 'Financial Terms and Conditions', 'Limitation of Liability', 'Governing Law', 'Health Disclaimer', 'Contact Information'];






            // ------------------------------------------
            // ------------------------------------------
            // ------------------------------------------



            $counter = 0;






            // 2: second
            $content[$counter++] = [
                'By accessing or using our services, you agree to be bound by these Terms and Conditions and all other policies posted on our site',

                "Be Healthy reserves the right to change or modify these Terms and Conditions at any time without prior notice. Your continued use of the website constitutes your acceptance of the updated terms",

                "Any updates to terms will be communicated through the website, and continued use of services after updates constitutes acceptance",
            ];








            // 3: third
            $content[$counter++] = [
                "Be Healthy values your privacy and is committed to protecting your personal information. For more details, please review our Privacy Policy, which is incorporated into these Terms and Conditions",

            ];








            // 4: fourth
            $content[$counter++] = [
                "All personal data provided by the customer during registration on our site is confidential and will not be displayed, sold, or shared",

                "All payment card data provided by the customer during subscription to our programs are confidential and will not be displayed, sold, or shared",

                "Policies, terms, and conditions may change occasionally; customers are encouraged to review the terms and conditions regularly for updates",

                "The prices of subscriptions, meals, and services may change from time to time; customers are encouraged to review the terms and conditions regularly for updates",

                "In case of any complaints, customers must contact customer service to resolve the issue",

                "This website is governed by the laws of the United Arab Emirates",

                "We do not deliver on Saturdays. For customers requesting daily meals, two sets will be delivered on Fridays",


                "Customers who do not return the ice bag will not receive a refund for the bag.",

                "Clients must pay in full 3 business days before the desired start date (both new subscribers and renewals). Without this, meal plan delivery will not proceed",

                "The cardholder must retain a copy of the transaction for their records and familiarize themselves with merchant policies and regulations",

                "Balance of payments for an upgrade or change of plan must be settled within 3 business days of the date of request. If this is not done, the meal plan will be shortened based on the remaining amount",

                "Corporate discounts can be added based on the terms agreed between Be Healthy Meal Plans and the other Partner",

                "Each confirmed and paid referral made by a client, the client can have a free snack on his renewed meal plan",

            ];














            // 5: fifth
            $content[$counter++] = [

                "We deliver across major cities all over the UAE (except selected out of town areas)",

                "Delivery must begin on the agreed start date, location and timing",

                "Any changes to the client's delivery—whether location or timings—must be made 3 business days in advance",

                "There may be a situation when you are unable to receive/return your chiller bag and leave it outside the door for collection. In case a bag is left unattended, Be Healthy cannot be held responsible for any missing items, bags or damages to the bag and the food inside (including spoilage)",

                "For failed delivery attempts due to customer absence this day will be counted as delivered",

                "Customers are responsible for checking and confirming delivery addresses and timings to prevent disputes",

            ];






            // 6: sixth
            $content[$counter++] = [

                "You must be at least 18 years of age to use this website. By using this site, you represent that you are at least 18 years old or have received consent from a legal guardian",

                "You agree to use our website for lawful purposes only and in a manner that does not infringe the rights of, restrict, or inhibit anyone else's use and enjoyment of the website",

                "You agree to use our website for lawful purposes only and in a manner that does not infringe the rights of, restrict, or inhibit anyone else's use and enjoyment of the website",


            ];







            // 7: seventh
            $content[$counter++] = [

                "Be Healthy aims to provide accurate descriptions of products and services. However, we do not guarantee that product descriptions, prices, or other content are error-free, complete, or current",

                "Be Healthy reserves the right to refuse service, terminate accounts, or cancel orders at our discretion, including, without limitation, if we believe that customer conduct violates applicable law or is harmful to our interests",

            ];








            // 8: eighth
            $content[$counter++] = [

                "The customer has a validity of 90 days to use their subscription starting from the first day of delivery (including any holds placed on the plan). If the 90 days are exceeded, the subscription will be cancelled automatically",

                "Customers can choose their meals from a selection offered for each meal and may remove dislikes or allergens. A custom plan is available with additional fees",

                "Meals are intended for the next day or should be consumed on the same day they are delivered",

                "The driver's waiting time at the agreed delivery location is 10 minutes from the time of arrival. If the customer does not respond to the call, the meals will be stored at the nearest Be Healthy branch",

                "Customers have the right to a refund of the remaining balance within the first week from the start date, in accordance with the company's financial terms and conditions",

                "Refunds are only applicable between days 5 to 7 of the subscription. No refunds will be issued from day 8 onward",

                "When cancelling, the actual cost of meals delivered will be deducted on the actual cost of the meal, and a cancellation fee of 200 AED will apply if cancelled within the first week of the meal plan. The remaining balance will be refunded",

            ];






            // 9: ninth
            $content[$counter++] = [

                "Refunds are deposited into the bank account agreed upon within 5 to 15 working days from the date of subscription cancellation",

                "Any fees related to payment method changes, upgrades, or other adjustments during the subscription period",

            ];







            // 10: tenth
            $content[$counter++] = [

                "Be Healthy shall not be liable for any indirect, incidental, special, consequential, or punitive damages arising out of or relating to your use of the website or our services",


                "Be Healthy does not guarantee that the website will be uninterrupted, error-free, or secure. You assume full responsibility for your use of the website and any linked sites",

            ];







            // 11: eleventh
            $content[$counter++] = [

                "These Terms and Conditions are governed by and construed in accordance with the laws of the United Arab Emirates, without regard to its conflict of law principles",


                "Any disputes arising out of or relating to these Terms and Conditions shall be resolved in the courts of the United Arab Emirates",

            ];








            // 12: twelfth
            $content[$counter++] = [

                "Customers should consult their doctors before beginning any diet plan, particularly if they have underlying health conditions",

            ];







            // 14: fourteen
            $content[$counter++] = [

                "If you have any questions about these Terms and Conditions, please contact us at WhatsApp Be Healthy Support: +971 54 995 8227",

            ];












            // -------------------------------------------------------------------------
            // -------------------------------------------------------------------------
            // -------------------------------------------------------------------------





            // B: others
        } else {





            // 1: main
            $header = ['Privacy Policy', "Website is owned and managed by Aleens, a dedicated meal planners who simplify your life by crafting personalized based in United Arab Emirates is our country of domicile"];







            // 1.5: titles
            $titles = ['General Points', 'What Sort of Personal Information We Hold', 'Our Legal Basis for Processing Your Personal Information', 'How Do We Use Your Personal Information', 'Cookies and Similar Technologies', 'Who Might We Share Your Personal Information With', 'Keeping You Informed About Our Products and Services', 'Keeping You Informed About Our Products and Services', 'Your Rights', 'Refunds', 'Automated Decision Making and Profiling', 'How Long Will We Keep Your Personal Information For', 'Security', 'Delivery', 'Policy Change'];






            // ------------------------------------------
            // ------------------------------------------
            // ------------------------------------------



            $counter = 0;




            // 1: first
            $content[$counter++] = [
                "This website is owned and managed by Aleens",
                "Minors under the age of 18 shall are prohibited to register as a User of this website",

                "We understand that your privacy and the security of your personal information is extremely important. This notice sets out what we do with your personal information, what we do to keep it secure, from where and how we collect it, as well as your rights in relation to the personal information we hold about you",

                "This policy applies if you interact with us through our restaurants, over the phone, online, through our mobile applications or otherwise by using our website or interacting with us on social media (our “Services”)",

                "If you make a payment for our products or services on our website, the details you are asked to submit will be provided directly to our payment provider via a secured connection",

                "The cardholder must retain a copy of transaction records and Merchant policies and rules",

                "We accept payments online using Visa and MasterCard credit/debit card in AED (or any other agreed currencies)",

                "All credit/debit cards details and personally identifiable information will NOT be stored, sold, shared, rented or leased to any third parties. The Website Policies and Terms & Conditions may be changed or updated occasionally to meet the requirements and standards. Therefore the Customers’ are encouraged to frequently visit these sections in order to be updated about the changes on the website. Modifications will be effective on the day they are posted",

                "Some of the advertisements you see on the Site are selected and delivered by third parties, such as ad networks, advertising agencies, advertisers, and audience segment providers. These third parties may collect information about you and your online activities, either on the Site or on other websites, through cookies, web beacons, and other technologies in an effort to understand your interests and deliver to you advertisements that are tailored to your interests.",

                "Please remember that we do not have access to, or control over, the information these third parties may collect. The information practices of these third parties are not covered by this privacy policy",


            ];






            // 2: second
            $content[$counter++] = [
                'Information that you provide to us such as your name, address, date of birth, telephone number, email address, bank account and payment card details and any feedback you give to us, including by phone, email, post, or when you communicate with us via social media',

                "Information about the services that we provide to you (including for example, the things we have provided to you, when and where, what you paid, the way you use our products and so on)",

                "Your account login details including your user name and chosen password",

                "Information about whether or not you want to receive marketing communications from us",

                "Your contact details and details of the emails and other electronic communications you receive from us, including whether that communication has been opened and if you have clicked on any links within that communication. We want to make sure that our communications are useful for you so if you don’t open them or don’t click on any links in them, we know we need to improve our products and services",

            ];








            // 3: third
            $content[$counter++] = [
                "Whenever we process your personal information we have to have something called a 'legal basis' for what we do. The different legal bases we rely on are",

                "Consent: You have told us you are happy for us to process your personal information for a specific purpose",

                "Legitimate interests: The processing is necessary for us to conduct our business but not where our interests are overridden by your interests or rights.",

                "Performance of a contract: We must process your personal information in order to be able to provide you with one of our products or services",

                "Prevention of fraud: Where we are required to process your data in order to protect us and our customers from fraud or money laundering",

                "Vital interests: The processing of your personal information is necessary to protect you or someone else’s life",

                "Public information: Where we process personal information which you have already made public",

                "Legal claims: The processing of your personal information is necessary for the establishment, exercise or defense of legal claims or whenever courts are acting in their judicial capacity; We are also required to process your personal information by law",



            ];








            // 4: fourth
            $content[$counter++] = [

                "To provide our products and services - we need to use your personal information to make our products and services available to you. If you then decide to order any of our products or services then we’re delighted, thank you. After that, we need to provide them to you and process your payment. And we need to use your details to do all this",

                "To personalise your shopping experience - we try to understand our customers so we can provide you with a great shopping experience, relevant marketing, personalized offers, shopping ideas and online advertising. Understanding how you use our App, how you interact with Aleens Kitchen, where you dine, the products and services you buy and how you use and browse our website helps us to do this",

                "For safety and security - we use your personal information to help provide safe and secure environments for our colleagues to work in, our customers to shop in and for our businesses to be conducted. To enable this we monitor online behavior and carry out checks to help us ensure that our customers are genuine to prevent fraud and to help customers use our services appropriately",

                "IAnalytics and profiling - we use your personal information for statistical analysis and to help us understand more about our customers. That includes understanding the products and services you buy, the manner in which you consume them, and by creating profiles about you. This helps us to serve you better and to find ways to improve our services, restaurants, app and website. These profiles help us to send you offers that are more relevant to you",

                "Contacting you - we use your personal information to contact you: either to conduct market research or to contact you about products and services from us and other companies. We may also contact you in relation to any questions you have raised with us or to discuss the status of your account with us",


            ];














            // 5: fifth
            $content[$counter++] = [

                "We use cookies to help give you the best experience on our website and to allow us and third parties to tailor ads you see on ours and other websites",

                "We use cookies to analyze site traffic, and personalize content. Cookies help us remember your preferences and improve site functionality and experience",


            ];






            // 6: sixth
            $content[$counter++] = [

                "We will share your personal information in certain circumstances with the other companies within the Aleens Group so that we can provide you with a high quality, personalized and tailored service",


                "Our service providers - we work with partners, suppliers, aggregators and agencies so that they can help us provide the products and services you require from us. These third parties process your personal information on our behalf and are required to meet our high standards of security before doing so. We only share information that allows them to provide their services to us or to facilitate them providing their services to you. These third parties include",


                "If we are required to by law, under any code of practice by which we are bound or where we are asked to do so by a public or regulatory authority such as the police",


                "If we need to do so in order to exercise or protect our legal rights, users, systems and services; or in response to requests from individuals (or their representatives) seeking to protect their rights or the rights of others. We will only share your personal information in response to requests which do not override your privacy interests. For example, we will not share your personal information with individuals who are merely curious about you, but we will share your personal information to e.g. insurers, solicitors, employers etc. which have a legitimate interest in your personal information",

            ];







            // 7: seventh
            $content[$counter++] = [

                "We would like to tell you about the great offers, ideas, products and services of the Aleens Kitchen from time to time that we think you might be interested in. Where we have your consent or it is in our legitimate interests to do so, we may do this through the post, by email, text message or by any other electronic means",

                "We won’t send you marketing messages if you tell us not to, but if you receive a service from us we will still need to send you occasional service-related messages. If you wish to amend your marketing preferences, you can do so by logging into Aleens account of one of our brands and following the directions. You can also give us a call",


                "Please note that it can take up a little while for all marketing to stop once you either withdraw your consent or tell us you’d like to opt out of marketing. This is because some marketing may already be in transit",

            ];








            // 8: eighth
            $content[$counter++] = [

                "Any dispute or claim arising out of or in connection with this website shall be governed and construed in accordance with the laws of UAE",

                "You have a number of rights under data protection legislation which, in certain circumstances, you may be able to exercise in relation to the personal information we process about you (the right to access a copy of the personal information we hold about you, to correction of inaccurate personal information we hold about you, to restrict our use of your personal information, to be forgotten, the right of data portability and to object to our use of your personal information)",

                "Where we rely on consent as the legal basis on which we process your personal information, you may also withdraw that consent at any time",

                "If you are seeking to exercise any of these rights, please contact us using the details in the 'Contact Us' section below. Please note that we will need to verify your identity before we can fulfil any of your rights under data protection law. This helps us to protect the personal information belonging to our customer against fraudulent requests",

            ];






            // 9: ninth
            $content[$counter++] = [

                "Refunds will be done only through the Original Mode of Payment",


            ];







            // 10: tenth
            $content[$counter++] = [

                "We use automated decision making, including profiling, in certain circumstances, such as when it is in our legitimate interests to do so, or where we have a right to do so because it is necessary for us to enter into, and perform, a contract with you. We use profiling to enable us to give you the best service across the Aleens Kitchen, including specific marketing which we believe you will be interested in",


                "You have the right not to be subject to a decision based solely on automated processing, including profiling, which has legal effects for you or affects you in any other significant way",


                "If you are seeking to exercise this right, please contact us using the details in the “Contact Us” section",

            ];







            // 11: eleventh
            $content[$counter++] = [

                "We will keep your personal information for the purposes set out in this privacy policy and in accordance with the law and relevant regulations. We will never retain your personal information for longer than is necessary. In most cases, our retention period will come to an end 7 years after the end of your relationship with us. However, in some instances we are required to hold your personal information for up to 12 years following the end of your relationship with us",


            ];








            // 12: twelfth
            $content[$counter++] = [

                "We limit physical access to our buildings and user access to our systems to only those that we believe are entitled to be there",

                "We use technology controls for our information systems, such as firewalls and user verification",

                "We utilize industry 'good practice' standards to support the maintenance of a robust information security management system; and enforce a 'need to know' policy, for access to any data or systems",

            ];







            // 13: thirteenth
            $content[$counter++] = [

                "Aleens will NOT deal or provide any services or products to any of OFAC (Office of Foreign Assets Control) sanctions countries in accordance with the law of UAE. Multiple transactions may result in multiple postings to the cardholder’s monthly statement",

            ];




            // 14: fourteen
            $content[$counter++] = [

                "This privacy policy was most recently updated in August 2024. If we make changes to it, then we will take appropriate steps to bring those changes to your attention",

            ];











            // -------------------------------------------------------------------------
            // -------------------------------------------------------------------------
            // -------------------------------------------------------------------------







        } // end if






        return view('livewire.website.privacy-policy', compact('settings', 'header', 'titles', 'content'));



    } // end function





} // end class
