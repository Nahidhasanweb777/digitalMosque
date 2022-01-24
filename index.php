<html>

<head>

    <title>Diigital Mosque watch</title>
    <link rel="icon" href="img/fav.png" type="image/gif" sizes="20x20">
    <!-- bootstrap link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--font aswsome link-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--font aswsome link-->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- bootstrap link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">

    <!--font jqurey link-->
    <script src="js/jqurey.js"></script>
    <script src="js/bootstrap.min.js"></script>



</head>

<body>


    <!-- ============#navber===========-->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top " style="color: #ffff;">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="far fa-clock" style="color: aqua; font-size:60px"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link active" href="#"> Home</a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Select Area</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Dhaka Division</a>
                            <a class="dropdown-item" href="#">Khulna Division</a>
                            <a class="dropdown-item" href="#">Sylhet Division</a>
                            <a class="dropdown-item" href="#">Rangpur Division</a>
                            <a class="dropdown-item" href="#">Rajshahi Division</a>
                            <a class="dropdown-item" href="#">Barisal Division</a>
                            <a class="dropdown-item" href="#">Chittagong Division</a>
                            <a class="dropdown-item" href="#">Mymensingh Division</a>


                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#hadit">Hadith</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>



    <!-- ============#local_watch===========-->
    <div class="container">

        <div class="row">
            <div class="col-md-3">


            </div>
            <div class="col-md-6">

                <div class="box1">
                    <!--<h1>Local Time</h1>-->

                    <div id="MyClockDisplay" class="clock" onload="showTime()"></div>
                    <h2> <?php
                    echo date("l, jS \of F, Y ")
                    ?></h2>

                </div>
            </div>
            <div class="col-md-3">


            </div>
        </div>

    </div>


    <!-- ============#Salad_time===========-->
    <div class="container">

        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <h1>FAJOR <i class="fas fa-arrow-right"></i>

                        4:50 AM</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h1>LEFTOVER <i class="fas fa-arrow-right"></i>

                        4:50
                    </h1>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <h1>DHUHR <i class="fas fa-arrow-right"></i>

                        4:50 AM</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h1>LEFTOVER <i class="fas fa-arrow-right"></i>

                        4:50
                    </h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <h1>ASR <i class="fas fa-arrow-right"></i>

                        4:50 AM</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h1>LEFTOVER <i class="fas fa-arrow-right"></i>

                        4:50
                    </h1>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <h1>MAGHRIB <i class="fas fa-arrow-right"></i>

                        4:50 AM</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h1>LEFTOVER <i class="fas fa-arrow-right"></i>

                        4:50
                    </h1>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">

                <div class="box">
                    <h1>ISHA <i class="fas fa-arrow-right"></i>

                        4:50 AM</h1>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <h1 id=hadit>LEFTOVER <i class="fas fa-arrow-right"></i>

                        4:50</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- ============#hadith===========-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12" style="padding: 10px 0px; background:#1e211f; color: rgba(255,255,255,.5);">
                <h1 style=" text-align: center;color: aqua">Read Hadith <i class="fas fa-book"></i></h1>
            </div>
        </div>
    </div>
    <!-- ============#read_hadith===========-->
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6" style="padding-bottom: 30px;">
                <h1 style="text-align: center;font-size: 30px;font-weight: 400; padding: 10px 0px;"> ওয়াহ্‌য়ীর সূচনা (كتاب بدء الوحى) </h1>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                ১/১. আল্লাহর রসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম-এর প্রতি কীভাবে ওয়াহী শুরু হয়েছিল।
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                            <div class="card-body">
                                আল্লাহ্ তা’আলার বাণীঃ ‘‘নিশ্চয় আমি আপনার প্রতি সেরূপ ওয়াহী প্রেরণ করেছি যেরূপ নূহ ও তাঁর পরবর্তী নবীদের (নবীদের) প্রতি ওয়াহী প্রেরণ করেছিলাম।’’ (সূরাহ্ আন-নিসা ৪/১৬৩)

                                ১. ‘আলক্বামাহ ইবনু ওয়াক্কাস আল-লায়সী (রহ.) হতে বর্ণিত। আমি ‘উমার ইবনুল খাত্তাব (রাঃ)-কে মিম্বারের উপর দাঁড়িয়ে বলতে শুনেছিঃ আমি আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম-কে বলতে শুনেছিঃ কাজ (এর প্রাপ্য হবে) নিয়্যাত অনুযায়ী। আর মানুষ তার নিয়্যাত অনুযায়ী প্রতিফল পাবে। তাই যার হিজরাত হবে ইহকাল লাভের অথবা কোন মহিলাকে বিবাহ করার উদ্দেশে- তবে তার হিজরাত সে উদ্দেশেই হবে, যে জন্যে, সে হিজরাত করেছে।] (৫৪, ২৫২৯, ৩৮৯৮, ৫০৭০, ৬৬৮৯, ৬৯৫৩; মুসলিম ২৩/৪৫ হাঃ ১৯০৭, আহমাদ ১৬৮) ( আধুনিক প্রকাশনী- ১, ইসলামিক ফাউন্ডেশন ১)

                                শারী‘আহ্‌র মূল উৎস হচ্ছে ওয়াহী। ওয়াহী দু’ প্রকার। ওয়াহী মাতলু (আল-কুরআন) ও ওয়াহী গাইরে মাতলু (সুন্নাহ ও হাদীস)। এবং দ্বীনে ইলাহীর ভিত্তি শুধুমাত্র দু’টি জিনিসের উপর প্রতিষ্ঠিত। ইজমা‘ ও কিয়াস কোন শার‘ঈ দলীল নয়। বরং যে কিয়াস এবং ইজমা‘ ওয়াহীর পক্ষে অর্থাৎ কুরআন ও সুন্নাহ মুতাবিক হবে তা গ্রহণযোগ্য এবং যেটা বিপক্ষে যাবে সেটা পরিত্যাজ্য ও অগ্রহণযোগ্য। এ প্রসঙ্গে আল্লাহ তা‘আলার বাণীঃ

                                (يَا أَيُّهَا الَّذِينَ آمَنُوا أَطِيعُوا اللَّهَ وَأَطِيعُوا الرَّسُولَ وَأُولِي الْأَمْرِ مِنْكُمْ فَإِنْ تَنَازَعْتُمْ فِي شَيْءٍ فَرُدُّوهُ إِلَى اللَّهِ وَالرَّسُولِ إِنْ كُنْتُمْ تُؤْمِنُونَ بِاللَّهِ وَالْيَوْمِ الْآخِرِ ذَلِكَ خَيْرٌ وَأَحْسَنُ تَأْوِيلاً) (النساء:৫৯)
                                (يَا أَيُّهَا الَّذِينَ آمَنُوا أَطِيعُوا اللَّهَ وَأَطِيعُوا الرَّسُولَ وَلا تُبْطِلُوا أَعْمَالَكُمْ) (محمد:৩৩)

                                কিন্তু বাতিল ফির্কার লোকেরা ইজমা‘ ও কিয়াসকে ওয়াহীর আসনে বসিয়েছে এবং বলে থাকেঃ শারী‘আহ্‌র ভিত্তি চারটি বিষয়ের উপর। কুরআন, সুন্নাহ, ইজমা‘ ও কিয়াস। বড় আশ্চর্যের বিষয় এই যে, সহাবায়ে কেরাম যাদের উপর আল্লাহ তা‘আলা তার সন্তুষ্টির ঘোষণা দিয়েছেন, তাদেরকে সত্যবাদী বলে স্বীকৃতি দেয়া হয়েছে এবং মুসলিম উম্মাহ এ ব্যাপারে সকলেই একমত। অথচ তারা সহাবায়ে কেরামকে দু’ ভাগে ভাগ করেছেন। (১) ফকীহ (২) গাইরে ফকীহ। আর বলেছেন যে সকল সাহাবী ফকীহ ছিলেন তারা যদি কিয়াসের বিপরীতে হাদীস বর্ণনা করেন তবে তা গ্রহণযোগ্য কিন্তু যে সকল সাহাবী গাইরে ফকীহ অর্থাৎ ফকীহ নন তাঁরা যদি কিয়াসের খেলাফ হাদীস বর্ণনা করেন তাহলে তা গ্রহণযোগ্য বলে বিবেচিত হবে না।
                                প্রকৃতপক্ষে এটা উম্মাতে মুহাম্মাদিয়াহকে সিরাতে মুস্তাকীমের পথ হতে সরিয়ে দেয়ার একটা বড় অস্ত্র এবং পরিকল্পনা। কেননা তাঁরা কিয়াসকে মূল এবং হাদীসকে দ্বিতীয় স্থানে রেখেছেন। সকল সাহাবীর উপর আল্লাহ তা‘আলা সন্তুষ্ট কিন্তু তারা খুশী নন। সকল সাহাবীর ব্যাপারে উম্মাতের ঐকমত্য রয়েছে। কিন্তু তাদের নিকট গাইরে ফকীহ সাহাবীগণ ‘আদিল নন।

                                ধোঁকাবাজীর কিছু নমুনাঃ তারা বলেন, ফকীহ সাহাবীগণ কিয়াসের খেলাফ হাদীস বর্ণনা করলে তা গ্রহণীয় হবে। কিন্তু গাইরে ফকীহ সাহাবীগণ কিয়াসের খেলাফ হাদীস বর্ণনা করলে তা বাতিল হয়ে যাবে এবং কিয়াসের উপর ‘আমল করতে হবে।
                                বাই‘য়ি মুসারাহ এর হাদীস আবূ হুরাইরাহ (রাযি.) হতে বর্ণিত এবং তা কিয়াসের খেলাফ। এই জন্য তা বাতিল। এবং কিয়াসের উপর ‘আমলযোগ্য। অথচ এই হাদীস ‘আবদুল্লাহ ইবনু মাস‘ঊদ (রাযি.) হতেও বর্ণিত হয়েছে।

                                (দেখুন সহীহ বুখারী ২৮৮ পৃষ্ঠা রশিদিয়া ছাপা)
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                পরিচ্ছেদঃ ১/২
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                উম্মুল মু’মিনীন ‘আয়িশাহ (রাঃ) হতে বর্ণিত। হারিস ইবনু হিশাম (রাঃ) আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম -কে জিজ্ঞেস করলেন, ‘হে আল্লাহর রাসূল! আপনার নিকট ওয়াহী কিরূপে আসে?’ আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম বললেনঃ [কোন কোন সময় তা ঘণ্টা বাজার মত আমার নিকট আসে। আর এটি-ই আমার উপর সবচেয়ে বেদনাদায়ক হয় এবং তা শেষ হতেই মালাক (ফেরেশতা) যা বলেন আমি তা মুখস্থ করে নেই, আবার কখনো মালাক মানুষের রূপ ধারণ করে আমার সাথে কথা বলেন। তিনি যা বলেন আমি তা মুখস্থ করে নেই।] ‘আয়িশাহ (রাঃ) বলেন, আমি তীব্র শীতের সময় ওয়াহী নাযিলরত অবস্থায় তাঁকে দেখেছি। ওয়াহী শেষ হলেই তাঁর ললাট হতে ঘাম ঝরে পড়ত। (৩২১৫; মুসলিম ৪৩/২৩, হাঃ ২৩৩৩, আহমাদ ২৫৩০৭, ২৬২৫৮) (আধুনিক প্রকাশনীঃ ২, ইসলামিক ফাউন্ডেশনঃ ২)

                                باب

                                عَبْدُ اللهِ بْنُ يُوسُفَ قَالَ أَخْبَرَنَا مَالِكٌ عَنْ هِشَامِ بْنِ عُرْوَةَ عَنْ أَبِيهِ عَنْ عَائِشَةَ أُمِّ الْمُؤْمِنِينَ رَضِيَ اللهُ عَنْهَا أَنَّ الْحَارِثَ بْنَ هِشَامٍسَأَلَ رَسُولَ اللهِ صلى الله عليه وسلم فَقَالَ يَا رَسُولَ اللهِ صلى الله عليه وسلم كَيْفَ يَأْتِيكَ الْوَحْيُ فَقَالَ رَسُولُ اللهِ صلى الله عليه وسلم أَحْيَانًا يَأْتِينِي مِثْلَ صَلْصَلَةِ الْجَرَسِ وَهُوَ أَشَدُّهُ عَلَيَّ فَيُفْصَمُ عَنِّي وَقَدْ وَعَيْتُ عَنْهُ مَا قَالَ وَأَحْيَانًا يَتَمَثَّلُ لِي الْمَلَكُ رَجُلاً فَيُكَلِّمُنِي فَأَعِي مَا يَقُولُ قَالَتْ عَائِشَةُ رَضِيَ اللهُ عَنْهَا وَلَقَدْ رَأَيْتُهُ يَنْزِلُ عَلَيْهِ الْوَحْيُ فِي الْيَوْمِ الشَّدِيدِ الْبَرْدِ فَيَفْصِمُ عَنْهُ وَإِنَّ جَبِينَهُ لَيَتَفَصَّدُ عَرَقًا.

                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                পরিচ্ছেদঃ ১/৩
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                উম্মুল মু’মিনীন ‘আয়িশাহ (রাঃ) হতে বর্ণিত। তিনি বলেন, আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম -এর নিকট সর্বপ্রথম যে ওয়াহী আসে, তা ছিল নিদ্রাবস্থায় বাস্তব স্বপ্নরূপে। যে স্বপ্নই তিনি দেখতেন তা একেবারে প্রভাতের আলোর ন্যায় প্রকাশিত হতো। অতঃপর তাঁর নিকট নির্জনতা পছন্দনীয় হয়ে দাঁড়ায় এবং তিনি ‘হেরা’র গুহায় নির্জনে অবস্থান করতেন। আপন পরিবারের নিকট ফিরে এসে কিছু খাদ্যসামগ্রী সঙ্গে নিয়ে যাওয়ার পূর্বে- এভাবে সেখানে তিনি এক নাগাড়ে বেশ কয়েক দিন ‘ইবাদাতে মগ্ন থাকতেন। অতঃপর খাদীজাহ (রাঃ)-এর নিকট ফিরে এসে আবার একই সময়ের জন্য কিছু খাদ্যদ্রব্য নিয়ে যেতেন। এভাবে ‘হেরা’ গুহায় অবস্থানকালে তাঁর নিকট ওয়াহী আসলো। তাঁর নিকট ফেরেশতা এসে বললো, ‘পাঠ করুন’। আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম বলেনঃ [‘‘আমি বললাম, ‘আমি পড়তে জানি না।]

                                তিনি (সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম) বলেনঃ [অতঃপর সে আমাকে জড়িয়ে ধরে এমনভাবে চাপ দিলো যে, আমার খুব কষ্ট হলো। অতঃপর সে আমাকে ছেড়ে দিয়ে বললো, ‘পাঠ করুন’। আমি বললামঃ আমি তো পড়তে জানি না।’ সে দ্বিতীয়বার আমাকে জড়িয়ে ধরে এমনভাবে চাপ দিলো যে, আমার খুব কষ্ট হলো। অতঃপর সে আমাকে ছেড়ে দিয়ে বললোঃ ‘পাঠ করুন’। আমি উত্তর দিলাম, ‘আমি তো পড়তে জানি না।’ আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম বলেন, অতঃপর তৃতীয়বারে তিনি আমাকে জড়িয়ে ধরে চাপ দিলেন। তারপর ছেড়ে দিয়ে বললেন, ‘‘পাঠ করুন আপনার রবের নামে, যিনি সৃষ্টি করেছেন। যিনি সৃষ্টি করেছেন মানুষকে জমাট রক্ত পিন্ড থেকে, পাঠ করুন, আর আপনার রব অতিশয় দয়ালু’’- (সূরাহ্ ‘আলাক্ব ৯৬/১-৩)।

                                অতঃপর এ আয়াত নিয়ে আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম -প্রত্যাবর্তন করলেন। তাঁর হৃদয় তখন কাঁপছিল। তিনি খাদীজাহ বিন্তু খুওয়ায়লিদের নিকট এসে বললেন, ‘আমাকে চাদর দ্বারা আবৃত কর’, ‘আমাকে চাদর দ্বারা আবৃত কর।’ তাঁরা তাঁকে চাদর দ্বারা আবৃত করলেন। এমনকি তাঁর শংকা দূর হলো। তখন তিনি খাদীজাহ (রাঃ)-এর নিকট ঘটনাবৃত্তান্ত জানিয়ে তাঁকে বললেন, আমি আমার নিজেকে নিয়ে শংকা বোধ করছি। খাদীজাহ (রাঃ) বললেন, আল্লাহর কসম, কখনই নয়। আল্লাহ্ আপনাকে কখনও লাঞ্ছিত করবেন না। আপনি তো আত্মীয়-স্বজনের সঙ্গে সদাচরণ করেন, অসহায় দুস্থদের দায়িত্ব বহন করেন, নিঃস্বকে সহযোগিতা করেন, মেহমানের আপ্যায়ন করেন এবং হক পথের দুর্দশাগ্রস্তকে সাহায্য করেন। অতঃপর তাঁকে নিয়ে খাদীজাহ (রাঃ) তাঁর চাচাতো ভাই ওয়ারাকাহ ইবনু নাওফাল ইবনু ‘আবদুল আসাদ ইবনু ‘আবদুল ‘উযযাহ’র নিকট গেলেন, যিনি অন্ধকার যুগে ‘ঈসায়ী ধর্ম গ্রহণ করেছিলেন। তিনি ইবরানী ভাষায় লিখতে পারতেন এবং আল্লাহর তাওফীক অনুযায়ী ইবরানী ভাষায় ইঞ্জিল হতে ভাষান্তর করতেন।

                                তিনি ছিলেন অতিবৃদ্ধ এবং অন্ধ হয়ে গিয়েছিলেন। খাদীজাহ (রাঃ) তাঁকে বললেন, ‘হে চাচাতো ভাই! আপনার ভাতিজার কথা শুনুন।’ ওয়ারাকাহ তাঁকে জিজ্ঞেস করলেন, ‘ভাতিজা! তুমি কী দেখ?’ আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম যা দেখেছিলেন, সবই বর্ণনা করলেন। তখন ওয়ারাকাহ তাঁকে বললেন, এটা সেই বার্তাবাহক যাঁকে আল্লাহ মূসা (আঃ)-এর নিকট পাঠিয়েছিলেন। আফসোস! আমি যদি সেদিন থাকতাম। আফসোস! আমি যদি সেদিন জীবিত থাকতাম, যেদিন তোমার কওম তোমাকে বহিষ্কার করবে।’ আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম বললেন, [‘তারা কি আমাকে বের করে দেবে?’] তিনি বললেন, ‘হ্যাঁ, তুমি যা নিয়ে এসেছো অনুরূপ (ওয়াহী) কিছু যিনিই নিয়ে এসেছেন তাঁর সঙ্গেই বৈরিতাপূর্ণ আচরণ করা হয়েছে। সেদিন যদি আমি থাকি, তবে তোমাকে জোরালোভাবে সাহায্য করব।’ এর কিছুদিন পর ওয়ারাকাহ (রাঃ) ইন্তিকাল করেন। আর ওয়াহীর বিরতি ঘটে।

                                (৩৩৯২, ৪৯৫৩, ৪৯৫৫, ৪৯৫৬, ৪৯৫৭, ৬৯৮২; মুসলিম ১/৭৩ হাঃ ১৬০, আহমাদ ২৬০১৮) (আধুনিক প্রকাশনীঃ ৩, ইসলামিক ফাউন্ডেশনঃ ৩)

                                باب

                                حَدَّثَنَا يَحْيَى بْنُ بُكَيْرٍ، قَالَ حَدَّثَنَا اللَّيْثُ، عَنْ عُقَيْلٍ، عَنِ ابْنِ شِهَابٍ، عَنْ عُرْوَةَ بْنِ الزُّبَيْرِ، عَنْ عَائِشَةَ أُمِّ الْمُؤْمِنِينَ، أَنَّهَا قَالَتْ أَوَّلُ مَا بُدِئَ بِهِ رَسُولُ اللَّهِ صلى الله عليه وسلم مِنَ الْوَحْىِ الرُّؤْيَا الصَّالِحَةُ فِي النَّوْمِ، فَكَانَ لاَ يَرَى رُؤْيَا إِلاَّ جَاءَتْ مِثْلَ فَلَقِ الصُّبْحِ، ثُمَّ حُبِّبَ إِلَيْهِ الْخَلاَءُ، وَكَانَ يَخْلُو بِغَارِ حِرَاءٍ فَيَتَحَنَّثُ فِيهِ ـ وَهُوَ التَّعَبُّدُ ـ اللَّيَالِيَ ذَوَاتِ الْعَدَدِ قَبْلَ أَنْ يَنْزِعَ إِلَى أَهْلِهِ، وَيَتَزَوَّدُ لِذَلِكَ، ثُمَّ يَرْجِعُ إِلَى خَدِيجَةَ، فَيَتَزَوَّدُ لِمِثْلِهَا، حَتَّى جَاءَهُ الْحَقُّ وَهُوَ فِي غَارِ حِرَاءٍ، فَجَاءَهُ الْمَلَكُ فَقَالَ اقْرَأْ‏.‏ قَالَ ‏"‏ مَا أَنَا بِقَارِئٍ ‏"‏‏.‏ قَالَ ‏"‏ فَأَخَذَنِي فَغَطَّنِي حَتَّى بَلَغَ مِنِّي الْجَهْدَ، ثُمَّ أَرْسَلَنِي فَقَالَ اقْرَأْ‏.‏ قُلْتُ مَا أَنَا بِقَارِئٍ‏.‏ فَأَخَذَنِي فَغَطَّنِي الثَّانِيَةَ حَتَّى بَلَغَ مِنِّي الْجَهْدَ، ثُمَّ أَرْسَلَنِي فَقَالَ اقْرَأْ‏.‏ فَقُلْتُ مَا أَنَا بِقَارِئٍ‏.‏ فَأَخَذَنِي فَغَطَّنِي الثَّالِثَةَ، ثُمَّ أَرْسَلَنِي فَقَالَ ‏(‏اقْرَأْ بِاسْمِ رَبِّكَ الَّذِي خَلَقَ * خَلَقَ الإِنْسَانَ مِنْ عَلَقٍ * اقْرَأْ وَرَبُّكَ الأَكْرَمُ‏)‏ ‏"‏‏.‏ فَرَجَعَ بِهَا رَسُولُ اللَّهِ صلى الله عليه وسلم يَرْجُفُ فُؤَادُهُ، فَدَخَلَ عَلَى خَدِيجَةَ بِنْتِ خُوَيْلِدٍ رضى الله عنها فَقَالَ ‏"‏ زَمِّلُونِي زَمِّلُونِي ‏"‏‏.‏ فَزَمَّلُوهُ حَتَّى ذَهَبَ عَنْهُ الرَّوْعُ، فَقَالَ لِخَدِيجَةَ وَأَخْبَرَهَا الْخَبَرَ ‏"‏ لَقَدْ خَشِيتُ عَلَى نَفْسِي ‏"‏‏.‏ فَقَالَتْ خَدِيجَةُ كَلاَّ وَاللَّهِ مَا يُخْزِيكَ اللَّهُ أَبَدًا، إِنَّكَ لَتَصِلُ الرَّحِمَ، وَتَحْمِلُ الْكَلَّ، وَتَكْسِبُ الْمَعْدُومَ، وَتَقْرِي الضَّيْفَ، وَتُعِينُ عَلَى نَوَائِبِ الْحَقِّ‏.‏ فَانْطَلَقَتْ بِهِ خَدِيجَةُ حَتَّى أَتَتْ بِهِ وَرَقَةَ بْنَ نَوْفَلِ بْنِ أَسَدِ بْنِ عَبْدِ الْعُزَّى ابْنَ عَمِّ خَدِيجَةَ ـ وَكَانَ امْرَأً تَنَصَّرَ فِي الْجَاهِلِيَّةِ، وَكَانَ يَكْتُبُ الْكِتَابَ الْعِبْرَانِيَّ، فَيَكْتُبُ مِنَ الإِنْجِيلِ بِالْعِبْرَانِيَّةِ مَا شَاءَ اللَّهُ أَنْ يَكْتُبَ، وَكَانَ شَيْخًا كَبِيرًا قَدْ عَمِيَ ـ فَقَالَتْ لَهُ خَدِيجَةُ يَا ابْنَ عَمِّ اسْمَعْ مِنَ ابْنِ أَخِيكَ‏.‏ فَقَالَ لَهُ وَرَقَةُ يَا ابْنَ أَخِي مَاذَا تَرَى فَأَخْبَرَهُ رَسُولُ اللَّهِ صلى الله عليه وسلم خَبَرَ مَا رَأَى‏.‏ فَقَالَ لَهُ وَرَقَةُ هَذَا النَّامُوسُ الَّذِي نَزَّلَ اللَّهُ عَلَى مُوسَى صلى الله عليه وسلم يَا لَيْتَنِي فِيهَا جَذَعًا، لَيْتَنِي أَكُونُ حَيًّا إِذْ يُخْرِجُكَ قَوْمُكَ‏.‏ فَقَالَ رَسُولُ اللَّهِ صلى الله عليه وسلم ‏"‏ أَوَمُخْرِجِيَّ هُمْ ‏"‏‏.‏ قَالَ نَعَمْ، لَمْ يَأْتِ رَجُلٌ قَطُّ بِمِثْلِ مَا جِئْتَ بِهِ إِلاَّ عُودِيَ، وَإِنْ يُدْرِكْنِي يَوْمُكَ أَنْصُرْكَ نَصْرًا مُؤَزَّرًا‏.‏ ثُمَّ لَمْ يَنْشَبْ وَرَقَةُ أَنْ تُوُفِّيَ وَفَتَرَ الْوَحْىُ‏.‏
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6" style="padding-bottom: 10px;">
                <h1 style="text-align: center;font-size: 30px;font-weight: 400; padding: 10px 0px;"> ঈমান (বিশ্বাস) (كتاب الإيمان) </h1>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#h1">
                                ২/১.নবী সল্লাল্লাহু ‘আলাইহি ওয়া সাল্লাম-এর বাণীঃ ইসলাম পাঁচটি স্তম্ভের উপর প্রতিষ্ঠিত।
                            </a>
                        </div>
                        <div id="h1" class="collapse show" data-parent="#accordion">
                            <div class="card-body">


                                وَهُوَ قَوْلٌ وَفِعْلٌ وَيَزِيدُ وَيَنْقُصُ قَالَ اللهُ تَعَالَى : )لِيَزْدَادُوا إِيمَانًا مَعَ إِيمَانِهِمْ وَزِدْنَاهُمْ هُدًى( )وَيَزِيدُ اللهُ الَّذِينَ اهْتَدَوْا هُدًى( )وَالَّذِينَ اهْتَدَوْا زَادَهُمْ هُدًى وَآتَاهُمْ تَقْوَاهُمْ( وَقَوْلُهُ )وَيَزْدَادَ الَّذِينَ آمَنُوا إِيمَانًا( وَقَوْلُهُ )أَيُّكُمْ زَادَتْهُ هَذِهِ إِيمَانًا( فَأَمَّا الَّذِينَ آمَنُوا فَزَادَتْهُمْ إِيمَانًا وَقَوْلُهُ جَلَّ ذِكْرُهُ )فَاخْشَوْهُمْ فَزَادَهُمْ إِيمَانًا( وَقَوْلُهُ تَعَالَى )وَمَا زَادَهُمْ إِلاَّ إِيمَانًا وَتَسْلِيمًا( وَالْحُبُّ فِي اللهِ وَالْبُغْضُ فِي اللهِ مِنَ الإِيْمَانِ وَكَتَبَ عُمَرُ بْنُ عَبْدِ الْعَزِيزِ إِلَى عَدِيِّ بْنِ عَدِيٍّ إِنَّ لِلْإِيمَانِ فَرَائِضَ وَشَرَائِعَ وَحُدُودًا وَسُنَنًا فَمَنْ اسْتَكْمَلَهَا اسْتَكْمَلَ الإِيْمَانَ وَمَنْ لَمْ يَسْتَكْمِلْهَا لَمْ يَسْتَكْمِلْ الإِيْمَانَ فَإِنْ أَعِشْ فَسَأُبَيِّنُهَا لَكُمْ حَتَّى تَعْمَلُوا بِهَا وَإِنْ أَمُتْ فَمَا أَنَا عَلَى صُحْبَتِكُمْ بِحَرِيصٍ وَقَالَ إِبْرَاهِيمُ صلى الله عليه وسلم )وَلَكِنْ لِيَطْمَئِنَّ قَلْبِي( وَقَالَ مُعَاذُ بْنُ جَبَلٍ اجْلِسْ بِنَا نُؤْمِنْ سَاعَةً وَقَالَ ابْنُ مَسْعُودٍ الْيَقِينُ الإِيْمَانُ كُلُّهُ وَقَالَ ابْنُ عُمَرَ لاَ يَبْلُغُ الْعَبْدُ حَقِيقَةَ التَّقْوَى حَتَّى يَدَعَ مَا حَاكَ فِي الصَّدْرِ وَقَالَ مُجَاهِدٌ )شَرَعَ لَكُمْ( مِنْ الدِّينِ أَوْصَيْنَاكَ يَا مُحَمَّدُ وَإِيَّاهُ دِينًا وَاحِدًا وَقَالَ ابْنُ عَبَّاسٍ )شِرْعَةً وَمِنْهَاجًا( سَبِيلاً وَسُنَّةً

                                আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম -এর বাণীঃ ইসলামের স্তম্ভ হচ্ছে পাঁচটিঃ মুখে স্বীকার এবং কাজে পরিণত করাই হচ্ছে ঈমান এবং তা বৃদ্ধি পায় ও হ্রাস পায়।* আল্লাহ্ তা‘আলা বলেনঃ ‘‘যাতে তারা তাদের ঈমানের সঙ্গে ঈমান মজবুত করে নেয়- (সূরাহ্ ফাত্হ ৪৮/৪)। আমরা তাদের সৎ পথে চলার শক্তি বাড়িয়ে দিয়েছিলাম- (সূরাহ্ কাহাফ ১৮/১৩)। এবং যারা সৎপথে চলে আল্লাহ্ তাদের অধিক হিদায়াত দান করেন- (সূরাহ্ মারইয়াম ১৯/৭৬)। এবং যারা সৎপথ অবলম্বন করে আল্লাহ্ তাদের হিদায়াত বাড়িয়ে দেন এবং তাদের সৎপথে চলার শক্তি বাড়িয়ে দেন- (সূরাহ্ মুহাম্মাদ ৪৭/১৭)। যাতে মু’মিনদের ঈমান বেড়ে যায়- (সূরাহ্ মুদ্দাসসির ৭৪/৩১)। আল্লাহ্ তা‘আলা আরো বলেন, এটা তোমাদের মধ্যে কার ঈমান বাড়িয়ে দিল? যারা মু’মিন এ তো তাদের ঈমান বাড়িয়ে দেয়- (সূরাহ্ আত্-তওবা ৯/১২৪)। এবং তাঁর বাণী, ‘‘সুতরাং তোমরা তাদের ভয় কর; একথা তাদের ঈমানের দৃঢ়তা বাড়িয়ে দিল’’- (সূরাহ্ আলে-ইমরান ৩/১৭৩)। ‘‘এতে তাদের ঈমান ও আনুগত্য আরও বৃদ্ধি পেল’’- (সূরাহ্ আহযাব ৩৩/২২)।

                                আর আল্লাহর জন্য ভালবাসা ও আল্লাহর জন্য ঘৃণা করা ঈমানের অংশ। ‘উমার ইবনু ‘আবদুল ‘আযীয (রহ.) ‘আদী ইবনু ‘আদী (রহ.)-এর নিকট এক পত্রে লিখেছিলেন, ‘ঈমানের কতকগুলো ফার্য (ফরয), কতকগুলো হুকুম-আহকাম, বিধি-নিষেধ এবং সুন্নাত রয়েছে। যে এগুলো পরিপূর্ণরূপে আদায় করে তার ঈমান পূর্ণ হয়। আর যে এগুলো পূর্ণভাবে আদায় করে না, তার ঈমান পূর্ণ হয় না। আমি যদি বেঁচে থাকি তবে অচিরেই এগুলো তোমাদের নিকট ব্যক্ত করব, যাতে তোমরা তার উপর ‘আমল করতে পার। আর যদি আমার মৃত্যু হয় তাহলে জেনে রাখ, তোমাদের সাহচর্যে থাকার জন্য আমি আকাঙ্ক্ষিত নই।’

                                ইবরাহীম (‘আ.) বলেন, ‘তবে এ তো কেবল চিত্ত প্রশান্তির জন্য’- (সূরাহ্ আল-বাক্বারাহ ২/২৬)। মু‘আয (রাঃ) বলেন, ‘‘এসো আমাদের সঙ্গে বস, কিছুক্ষণ ঈমানের আলোচনা করি।’’ ইবনু মাস‘ঊদ (রাঃ) বলেন, ‘ইয়াকীন হল পূর্ণ ঈমান।’ ইবনু ‘উমার (রাঃ) বলেন, ‘বান্দা প্রকৃত তাকওয়ায় পৌঁছতে পারে না, যতক্ষণ পর্যন্ত সে, মনে যে বিষয় সন্দেহের সৃষ্টি করে, তা পরিত্যাগ না করে।’ মুজাহিদ (রাঃ) এ আয়াতের ব্যাখ্যায় বলেন, ‘‘অর্থাৎ হে মুহাম্মাদ সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম! আমি আপনাকে এবং নূহকে একই ধর্মের আদেশ করেছি’’- (সূরাহ্ শূরা ৪২/১৩)। ইবনু ‘আব্বাস (রাঃ) বলেন, ‘‘অর্থাৎ পথ ও পন্থা’’- (সূরাহ্ আল-মায়িদাহ ৫/৪৮)।


                                )قُلْ مَا يَعْبَأُ بِكُمْ رَبِّي لَوْلاَ دُعَاؤُكُمْ( وَمَعْنَى الدُّعَاءِ فِي اللُّغَةِ الإِيْمَانُ.


                                এ মর্মে আল্লাহ তা‘আলার বাণীঃ ‘‘বলে দিন, আমার প্রতিপালক তোমাদের একটুও পরোয়া করবেন না যদি তোমরা ‘ইবাদাত না কর’’- (সূরাহ্ আল-ফুরক্বান ২৫/৭৭)। অভিধানে দু‘আর অর্থ করা হয়েছেঃ ‘‘ঈমান’’।

                                ৮. ইবন ‘উমার (রাঃ) হতে বর্ণিত। তিনি বলেন, আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম ইরশাদ করেন, ইসলামের স্তম্ভ হচ্ছে পাঁচটি। ১. আল্লাহ্ ব্যতীত প্রকৃত কোন উপাস্য নেই এবং নিশ্চয়ই মুহাম্মাদ সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম আল্লাহর রাসূল-এ কথার সাক্ষ্য প্রদান করা। ২. সালাত কায়িম করা। ৩. যাকাত আদায় করা। ৪. হাজ্জ সম্পাদন করা এবং ৫. রমাযানের সিয়ামব্রত পালন করা। (৪৫১৪; মুসলিম ১/৫ হাঃ ১৬, আহমাদ ৬০২২, ৬৩০৯) (আধুনিক প্রকাশনীঃ ৭, ইসলামিক ফাউন্ডেশনঃ ৭)

                                * কোন কোন ফকীহদের নিকট ঈমান বাড়েও না কমেও না। বরং সমান থাকে। তাদের নিকট একজন নবীর ঈমান ও ইবলিসের ঈমান এক সমান। তাদের এই ‘আকীদাহ কুরআন ও সুন্নাহ বিরোধী। এটা মুরজি’আহ সম্প্রদায়ের ভ্রান্ত ‘আকীদাহর অন্তর্ভুক্ত।
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed card-link" data-toggle="collapse" href="#h">
                                পরিচ্ছেদঃ ২/৩
                            </a>
                        </div>
                        <div id="h" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                ঈমানের বিষয়সমূহ

                                وَقَوْلِ اللهِ تَعَالَى: )لَيْسَ الْبِرَّ أَنْ تُوَلُّوا وُجُوهَكُمْ قِبَلَ الْمَشْرِقِ وَالْمَغْرِبِ وَلَكِنَّ الْبِرَّ مَنْ آمَنَ بِاللهِ وَالْيَوْمِ الْآخِرِ وَالْمَلاَئِكَةِ وَالْكِتَابِ وَالنَّبِيِّينَ وَآتَى الْمَالَ عَلَى حُبِّهِ ذَوِي الْقُرْبَى وَالْيَتَامَى وَالْمَسَاكِينَ وَابْنَ السَّبِيلِ وَالسَّائِلِينَ وَفِي الرِّقَابِ وَأَقَامَ الصَّلاَةَ وَآتَى الزَّكَاةَ وَالْمُوفُونَ بِعَهْدِهِمْ إِذَا عَاهَدُوا وَالصَّابِرِينَ فِي الْبَأْسَاءِ وَالضَّرَّاءِ وَحِينَ الْبَأْسِ أُولَئِكَ الَّذِينَ صَدَقُوا وَأُولَئِكَ هُمْ الْمُتَّقُونَ( وَقَوْلِهِ )قَدْ أَفْلَحَ الْمُؤْمِنُونَ( الآيَةَ.

                                আল্লাহ্ তা‘আলার বাণীঃ ‘‘কোন পুণ্য নেই পূর্ব এবং পশ্চিম দিকে তোমাদের মুখ ফেরানোতে; কিন্তু পুণ্য আছে কেউ ঈমান আনলে আল্লাহর উপর, আখিরাতের উপর, ফেরেশতাদের উপর, সকল কিতাবের উপর, আর সকল নবী-রাসূলদের উপর, এবং অর্থ দান করলে আল্লাহ প্রেমে আত্মীয়-স্বজন, ইয়াতিম, মিসকীন, মুসাফির, সাহায্যপ্রার্থী এবং দাস মুক্তির জন্য, সালাত কায়িম করলে, যাকাত দিলে, কৃত প্রতিশ্রুতি পূর্ণ করলে আর অভাবে, রোগে-শোকে ও যুদ্ধ বিভ্রাটে ধৈর্যধারণ করলে। এরাই হল প্রকৃত সত্যপরায়ণ, আর এরাই মুত্তাকী’’- (আল-বাক্বারাহ ২/১৭৭)। ‘‘অবশ্যই সফলতা লাভ করেছে মুমিনগণ’’- (সূরাহ্ মুমিনূন ২৩/১)।

                                ৯. আবূ হুরাইরাহ (রাঃ) হতে বর্ণিত। নবী সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম বলেছেন, ঈমানের ষাটেরও অধিক শাখা আছে। আর লজ্জা হচ্ছে ঈমানের একটি শাখা। (মুসলিম ১/১২ হাঃ ৩৫, আহমাদ ৯৩৭২) (আধুনিক প্রকাশনীঃ ৮, ইসলামিক ফাউন্ডেশনঃ ৮)

                                باب أُمُورِ الإِيمَانِ

                                حَدَّثَنَا عَبْدُ اللَّهِ بْنُ مُحَمَّدٍ، قَالَ حَدَّثَنَا أَبُو عَامِرٍ الْعَقَدِيُّ، قَالَ حَدَّثَنَا سُلَيْمَانُ بْنُ بِلاَلٍ، عَنْ عَبْدِ اللَّهِ بْنِ دِينَارٍ، عَنْ أَبِي صَالِحٍ، عَنْ أَبِي هُرَيْرَةَ ـ رضى الله عنه ـ عَنِ النَّبِيِّ صلى الله عليه وسلم صلى الله عليه وسلم قَالَ ‏ "‏ الإِيمَانُ بِضْعٌ وَسِتُّونَ شُعْبَةً، وَالْحَيَاءُ شُعْبَةٌ مِنَ الإِيمَانِ ‏"‏‏.‏
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header ">
                            <a class="collapsed card-link" data-toggle="collapse" href="#h2">
                                পরিচ্ছেদঃ ২/৪
                            </a>
                        </div>
                        <div id="h2" class="collapse" data-parent="#accordion">
                            <div class="card-body">
                                সে-ই মুসলিম, যার জিহ্বা ও হাত থেকে অন্য মুসলিম নিরাপদ থাকে।

                                ১০. ‘আবদুল্লাহ ইবনু ‘আমর (রাঃ) হতে বর্ণিত। আল্লাহর রাসূল সাল্লাল্লাহু আলাইহি ওয়াসাল্লাম ইরশাদ করেন, সে-ই মুসলিম, যার জিহবা ও হাত হতে সকল মুসলিম নিরাপদ এবং সে-ই প্রকৃত মুহাজির, আল্লাহ যা নিষেধ করেছেন তা যে ত্যাগ করে। (৬৪৮৪; মুসলিম ১/১৪ হাঃ ৪০, আহমাদ ৬৭৬৫) (আধুনিক প্রকাশনীঃ ৯, ইসলামিক ফাউন্ডেশনঃ ৯)

                                باب الْمُسْلِمُ مَنْ سَلِمَ الْمُسْلِمُونَ مِنْ لِسَانِهِ وَيَدِهِ

                                آدَمُ بْنُ أَبِي إِيَاسٍ قَالَ حَدَّثَنَا شُعْبَةُ عَنْ عَبْدِ اللهِ بْنِ أَبِي السَّفَرِ وَإِسْمَاعِيلَ بْنِ أَبِي خَالِدٍ عَنْ الشَّعْبِيِّ عَنْ عَبْدِ اللهِ بْنِ عَمْرٍو رَضِيَ اللهُ عَنْهُمَا عَنِ النَّبِيِّ صلى الله عليه وسلم قَالَ الْمُسْلِمُ مَنْ سَلِمَ الْمُسْلِمُونَ مِنْ لِسَانِهِ وَيَدِهِ وَالْمُهَاجِرُ مَنْ هَجَرَ مَا نَهَى اللهُ عَنْهُ
                                قَالَ أَبُو عَبْد اللهِ وَقَالَ أَبُو مُعَاوِيَةَ حَدَّثَنَا دَاوُدُ هُوَ ابْنُ أَبِي هِنْدٍ عَنْ عَامِرٍ قَالَ سَمِعْتُ عَبْدَ اللهِ يَعْنِي ابْنَ عَمْرٍو عَنِ النَّبِيِّ صلى الله عليه وسلم وَقَالَ عَبْدُ الأَعْلَى عَنْ دَاوُدَ عَنْ عَامِرٍ عَنْ عَبْدِ اللهِ عَنِ النَّبِيِّ صلى الله عليه وسلم
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============#about===========-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="padding: 10px 0px; background:#1e211f; color: rgba(255,255,255,.5);">
                <h1 style="text-align: center; color: aqua">About <i class="fas fa-address-card"></i></h1>
            </div>


        </div>
        <div class="row" id="about">
            <div class="col-md-3" style="padding: 20px 5px;">


                <div class="card">
                    <img class="card-img-top" src="img/p1.png" alt="Card image" style="width:100%" height="300px;">
                    <div class="card-body">
                        <h4 class="card-title">Nahid Hasan</h4>
                        <p class="card-text">Department of CSE,City University,BD.</p>
                        <a href="https://web.facebook.com/rj.nahid.9047/" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="padding: 20px 5px;">


                <div class="card">
                    <img class="card-img-top" src="img/p4.png" alt="Card image" style="width:100%" height="300px;">
                    <div class="card-body">
                        <h4 class="card-title">Fahim Shahriar Adnan</h4>
                        <p class="card-text">Department of CSE,City University,BD.</p>
                        <a href="https://web.facebook.com/fahim.adnan.9" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="padding: 20px 5px;">


                <div class="card">
                    <img class="card-img-top" src="img/p4.png" alt="Card image" style="width:100%" height="300px;">
                    <div class="card-body">
                        <h4 class="card-title">Muhit Asraf</h4>
                        <p class="card-text">Department of CSE,City University,BD.</p>
                        <a href="https://web.facebook.com/muhitasraf" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="padding: 20px 5px;">
                <div class="card">
                    <img class="card-img-top" src="img/p4.png" alt="Card image" style="width:100%" height="300px;">
                    <div class="card-body">
                        <h4 class="card-title">Mohammad Moohsin</h4>
                        <p class="card-text">Department of CSE,City University,BD.</p>
                        <a href="https://web.facebook.com/dukhu.vai/" class="btn btn-primary">See Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ============#copyright===========-->

    <div class="container-fluid" style="text-align: center; background:  #1e211f; color: aliceblue;padding-top:10px;padding-bottom:10px;">
        <div class="row">
            <div class="col-md-12">
                <i class="fas fa-copyright"></i>Copyright 2021 by All Rights Reserved.
            </div>
        </div>
    </div>



    <script>
        function showTime() {
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "AM";

            if (h == 0) {
                h = 12;
            }

            if (h > 12) {
                h = h - 12;
                session = "PM";
            }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = h + ":" + m + ":" + s + " " + session;
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;

            setTimeout(showTime, 1000);

        }

        showTime();

    </script>
</body>

</html>
