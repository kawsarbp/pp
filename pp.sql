-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2023 at 03:44 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pp`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `title`, `date`, `photo`, `status`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nature Connection Exercise – Perceive and Receive', '2023-03-25', '641e83c9d66b8250323051657.png', 'active', 'For this exercise find a place, any place, with some nature present (which, let’s face it, is anywhere and everywhere; the air you are breathing right now, even the body with which you perceive the world is part of ‘nature’).\r\n\r\nIn this practice, we begin by honing our powers of perception. Imagine you have just landed here on planet Earth and are experiencing this reality for the first time. What are you curious about? What do you notice? What aspects of the environment draw your attention?\r\n\r\nOpen and engage all the senses. What is it to see, hear, feel, smell? Direct your attention towards something that gives you pleasure in or around you. Allow your attention to be sustained on this object. Resist the habitual tendency to move on quickly to something else. Stay with it, explore and investigate all its qualities with the senses.\r\n\r\nWhat happens when you stay with the experience? Often the more we look, the more we see, as new layers of detail begin to emerge as the subtleties and nuances of an image give themselves up to the patient eye. Rich detail that we never imagined existed in something so ‘everyday’, begins to emerge.\r\n\r\nOnce you have ‘perceived’ it, then open fully to ‘receiving’ it – open to the experience as if you were taking it in to your mind and body, savouring and enjoying the details, the nuances, and the flavours of experience.\r\n\r\nIt starts with intention – deliberately guiding your attention towards a particular object; then perception – attending to what you are perceiving. Then we can experiment with simply opening and surrendering to the experience; to really allow the experience to nourish you, you can imagine the experience flowing into you, as you simply open and receive the goodness that you perceive.\r\n\r\nTune into the experience in body and mind: How does it feel? What sensations, emotions, and thoughts are arising? Savour any pleasant feelings, basking in their warm glow.\r\n\r\nThrough this process we are training the attention to be flexible: We shift between an external focus and an inner focus, noticing how there is really no separation between inner and outer but simply different aspects of our present moment reality that we can attend to and enjoy.\r\n\r\nThis process need only take 30 seconds or a couple of minutes (always nice to indulge for longer if you can) but it can have a subtle yet powerful effect on your ability to reduce stress and increase your emotional well-being', '2023-03-23 23:16:57', '2023-03-23 23:16:57'),
(2, 1, 'Society – The soil in which we grow', '2023-03-25', '641e84417c04a250323051857.png', 'active', 'In order for any plant to grow and flourish to its full potential, it needs the right conditions.\r\n\r\nThe soil is all important. Everything grows in the soil. If the soil is good and you have the right amount of sunshine and water everything takes care of itself. Nature follows its own course. We don’t need to interfere. The tiny acorn grows into the majestic Oak tree.\r\n\r\nWould the same Oak tree grow in a desert? Would it flourish in a tiny plant pot? What if the soil is barren and polluted?\r\n\r\nIt is no different for human beings. In order for us to grow and flourish to our full potential, we need the right conditions. In our case, you could think of society as the soil in which we grow. What do I mean when I say “society”? I mean it in the broadest possible sense: our families, our communities, our schools, our friends, our government institutions, our laws, our offices, our work, our recreational spaces, our culture… the world in which we live.\r\n\r\nDoes our society provide the optimum conditions for human growth and development?\r\n\r\nIs each person afforded the appropriate conditions which will allow them to flourish… to become what they were always naturally inclined to become: an artist, a farmer, a carer, an entertainer, a thinker, a writer, a scientist, a mother, a teacher, an explorer?\r\n\r\nIs our society more akin to an industrial farm where only one or two crops are considered to be of value? Where rainforests are chopped down to make room for the profitable, consumable crops. Where any inclination towards being an artist or an explorer or a philosopher is suppressed in favour of something more practical… maybe an accountant or a tax consultant or a banker? Not that there’s anything at all wrong with those professions if that’s what you love to do. Does society make it easy for a person to discover what their talent is and does it enable them to cultivate that talent? Is that what school does or in a sense does our current education system do the exact opposite? Does it teach children to question and think for themselves or does it teach them to memorise facts and conform?\r\n\r\nThink back to when you were very young. What did you love to do back then? What were you really interested in? Maybe it’s so long ago you find it difficult to remember. Did you have a natural inclination towards something? Were you one of the lucky ones and did you always follow this interest throughout your life or did you stop for some reason? Was it suppressed? When did it become very important to “fit in” and please other people? When did you become pragmatic? When did safety become the most important thing? When did earning lots of money, owning material things and being “successful” become the dream? What is success? Were you ever empowered to follow your real dream or did it always seem unrealistic and unfeasible to do that? Were you ever asked what it is you would really like to do with your life? Have you ever considered these questions before?\r\n\r\nIf the conditions were right, if the soil was fertile…what would you become?\r\n\r\nOver half a year ago, hi.com launched their product that entails a ‘cross-ecosystem mobile payment and financial services platform.’. In essence, users are able to do the same stuff with money as a traditional bank offers. Since it’s a platform on the blockchain, the token hi Dollar is involved. At the time of writing, 1 hi Dollar is worth $1,44.\r\n\r\nhaving only eight active referred users will already add up to $200 monthly rewards!\r\nPossible earnings\r\n\r\nEvery user of the hi platform is able to claim 1 free hi Dollar each day. This alone will grant a total of $44,64 each month. As you can imagine, this monthly return is heavily affected by the price action of the token.\r\n\r\nAn additional feature of the hi platform is the possibility to earn from invited users. For each invited user, you’ll earn 50% of their rewards. Even after the first day, a newly invited member can earn you an additional $0,72. This might not sound like a lot. However, having only eight active referred users will already add up to $200 monthly rewards! The platform is currently in beta release and you can only enter based on an invite.\r\nSetting up\r\n\r\nSetting up is really easy and can be done in multiple ways. The most convenient way to set up and claim daily rewards is by installing their mobile application. Another really easy way is by using Telegram or Whatsapp. The following screenshot shows the conversation I had with the Telegram bot to set up my account and claim my first reward. The mobile application can be downloaded later and synced.\r\n\r\nThe platform is currently in beta release and you can only enter based on an invite.\r\n\r\nThe platform is still under private beta, so referral of an existing user is required. Either use this link hi.com or enter StoicT upon request when using Whatsapp or Telegram!\r\n\r\nIf you enjoy reading stories like these and want to support me as a writer, consider becoming a Medium member. The membership is $5 a month, giving you unlimited access to stories on Medium. If you sign up using my link, I’ll earn a small percentage.', '2023-03-23 23:18:57', '2023-03-23 23:18:57'),
(3, 1, 'Nature is a teacher – What happens when you allow everything to be “as it is”?', '2023-03-25', '641e846497eeb250323051932.png', 'active', 'A number of years ago I went on holiday to a beautiful part of Portugal. We stayed in a converted farmhouse in the middle of a national park. The farmhouse was in a valley. We arrived in the evening when the birds were just starting to roost. It was still warm and the air smelled sweet with pollen. You could hear the hum of crickets. A small river flowed through that valley. We opened a rickety gate and crossed a small wooden bridge. As we walked along the narrow path that led to our house I had a clear vision of what my morning routine would be like for the next fourteen days. I had been working hard for the last few months and I felt tired. I wanted this holiday to be a mini retreat. I would wake up early each day when it was still quite cool and I would meditate for a while. I imagined myself sitting in a peaceful spot, my mind calm, my body relaxed… listening to the river flowing, hearing the birds and wildlife starting to stir, feeling the first rays of the early morning sun hit my face as it rose over the top of the hill. Present. Even as I write this now, it sounds like paradise to me.\r\n\r\nI work up early the next morning and it was just as I imagined it would be. There is nothing like the stillness of the early morning. There was a gentle, peaceful feeling that enveloped me. It didn’t come from me but seemed to come from the earth and the river and the mountains. Everything was clearer than usual. The mind wasn’t racing here and there the way it normally does. I had never been to this place before but it felt welcoming and familiar. I found a spot to sit quietly. I could hear the faint hum of insects. The air was very still and there was only an occasional gentle breeze. A fly landed on my face. After a moment or two I carefully lifted my hand and gently ushered him away. Then another fly landed on my face. And another. And another. The feeling I had experienced a few moments ago was gone. I endured thirty minutes or so of mild torture that first morning before I admitted defeat and retreated to the farmhouse.\r\n\r\nIn the ensuing days I experimented with different approaches. I went to a different spot to try and escape the flies. I went at different times of the day. I had been practicing meditation for many years already and I had dealt with all kinds of distractions and obstacles in the past. I was sure that this would be no different. I had heard lots of stories and parables about similar experiences where the “lesson” is: “Your resistance to things not being the way you want them to be is the real source of your suffering. Drop your resistance. Drop your attachment to things being a certain way”. Words. I had repeated these same words to others many times. The words made sense to me and I believed them. I said these words to myself now. I tried to feel compassion for each fly that landed on me. I tried to change my perspective. I tried to simply experience the movements of each fly as pure sensation on my skin. I reminded myself that flies are an important part of the ecosystem and tried to appreciate each fly. I was lying to myself. Things weren’t going the way I wanted them to. I really hated those flies. I just felt irritated and tense. I was in a constant state of vigilance…waiting for the next fly to land on my skin, knowing that I would have to “mindfully” endure its presence for as long as possible until finally, when I could take no more, I would choose to “mindfully” flick it away… knowing also that in a few moments it would inevitably return. I thought about abandoning my plan to practice outside in nature and moving inside to the farmhouse. I’m stubborn though and I endured several more mornings of mental torture.\r\n\r\nThe fact that I couldn’t drop my resistance to things being a certain way was making things worse. I was also annoyed with myself now. The more I “tried” to be patient and accepting about the flies, the worse I felt. All this effort was adding unnecessary layers of suffering to my experience. More words. I already knew this. I had heard this advice many times in the past: “Stop making effort. When you practice just allow everything to be exactly as it is.”\r\n\r\nOn this morning, I was sitting in a sheltered spot near the river under an old Holm Oak. If you observed me from a distance you might think that I was in heaven. I didn’t feel like I was in heaven as a solitary fly methodically explored the back of my hand and several more buzzed dangerously close to my face. A question came to mind: in this moment what would actually happen if I did nothing and allowed EVERYTHING to be exactly as it is? I began conducting my experiment.\r\n\r\nFirst things first – what was my actual experience in this moment?\r\n\r\nAs proof, here are eight examples of designs that are unwittingly racist.\r\n1. Sunglasses\r\n\r\nSome people of color complain that sunglasses are designed for Caucasian faces, with narrow and high nasal bridges, and aren’t a good fit for them. This makes them slide off easily, or sit too tightly on the nose. Afropolitan eyewear brand REFRAMD is trying to change this, and develop “a new generation of sunglasses that consider Afropolitans and other overlooked communities.” They have already made $45 000 on Kickstarter.\r\n2. Band-Aids\r\n\r\nBand-aids were designed to be “skin-coloured” to blend in and hide your injury. Except there is no such colour as “skin” or “flesh.” They are actually just the color of white skin. The eponym brand Band-Aid, part of Johnson and Johnson, announced last year on Instagram that they would be developing a range of different colored bandaids, from light to dark brown.\r\n3. Heart rate monitors\r\n\r\nThe majority of consumer devices that track your heart rate do so thanks to optical sensors that measure the volume of your blood. In between beats, there is a lower concentration of blood in the veins of your wrist, so more light is reflected back to the sensor, which allows it to distinguish between beats. The problem is that skin with more melanin blocks green light, making it harder to get a correct reading. The darker your skin, the less accurate the device will be.\r\n4. Makeup Shades\r\n\r\nI repeat, there is no such thing as “skin-coloured.” But make-up rarely reflects that. They lack foundations for people of color. When they do exist, some cosmetic stores “forget” to stock them. Journalist Tansy Breshears wrote in a piece in Racked about her time working in a drugstore:\r\n\r\n    At least twice monthly for the near-two years I was employed there, I would ask higher-ups (who, before you ask, yes, were all white) why we didn’t carry makeup meant for women of color. I was given the same answer every time: “We dealt with too much shoplifting when we carried those shades.”\r\n\r\nThis concern is clearly founded in racist stereotypes.\r\n5. Skin colored crayons\r\n\r\nIn 2013, an Indian law student filed a complaint against one of the country’s largest stationery manufacturers over a wax crayon labelled ‘skin’, which was clearly representing white skin with a peachy pinky hue. He argued that the crayon would reinforce white supremacy, teaching kids subtly that skin is meant to be white. “What impact will it have on these young minds when they realise that their skin colour is not recognised? Won’t it reinforce the notions of beauty that fairness products or films seek to impose?” he asked.\r\n6 Automatic Faucets\r\n\r\nAutomatic faucets and soap dispensers use near-infrared technology, sending out an invisible light which gets reflected back to a sensor when there is a hand present. But when these products aren’t tested on people of different skin variants, they often end up unable to detect hands that aren’t white.', '2023-03-23 23:19:32', '2023-03-23 23:19:32'),
(4, 1, 'Connecting to Care', '2023-03-25', '641e848f08438250323052015.png', 'active', 'The absence of a deep emotional connection between humans and the natural world is at the root of the environmental crisis.\r\n\r\nCan you think of a place in nature that you know really well?\r\n\r\nClose your eyes for a moment and see what comes up.\r\n\r\nCan you visualise the place in exquisite detail? The sounds, the colours, the smells, the subtleties that only you know.\r\n\r\nDo memories surface? Perhaps you have known this place for a long time. Maybe you spent golden moments from your childhood here? There might be happy memories tinged with sadness or regret?\r\n\r\nHow does it feel when you bring this place to mind now?\r\n\r\nPlease don’t rush. Take a moment to connect.\r\n\r\nNow another question.\r\n\r\nHow would you feel if this same place was under imminent threat? Imagine someone is destroying it right now. What do you feel? Anger? Sadness? Shock? Resignation? Nothing at all?\r\n\r\nCan you imagine that you might actually do something immediate and tangible to help protect this place?\r\n\r\nBe honest with yourself.\r\n\r\nIf you really have a deep connection with this place, it is likely that you might feel moved to do something. That’s obvious, right? We naturally and instinctively act to protect that which we care very deeply about.\r\n\r\nBut what if that deep connection with a place is absent? How would that affect your response? It’s a beautiful place but it’s not your place. Are you still likely to do something about it? Is it your responsibility?\r\n\r\nLet me paint two scenarios for you…\r\n\r\nYou are walking through town at night and you see your best friend looking dishevelled, sleeping rough on the street. You haven’t seen him for six months. There is probably an initial shock: “Oh my God, what happened?!!” You instinctively reach out for him. Before you know it your arm is on his shoulder: “Come home with me. Let me take care of you”.\r\n\r\nNow another night. This time you see a random stranger looking dishevelled, sleeping rough on the street. Be honest. What do you do? Is it someone else’s problem? If your heart is big enough you might give him some money or buy him a sandwich but is he coming home to sleep on your couch? Perhaps you rationalise your inaction by reminding yourself that you donate to the local homeless charity. You might remind yourself to vote for a politician who appears committed to doing something. But most of the time most of us don’t do anything at all.\r\n\r\nWhy the difference? It’s obvious isn’t it… in the first scenario you don’t even think. You have a deep emotional connection with your best friend and you have to act. In the second scenario you might feel sad and you might recognise the tragedy of the situation but there is no emotional connection between the two of you, so more often than not you don’t act.\r\n\r\nJohn Steinbeck put it very well when he wrote (at a time when there was famine in China): “It means very little to know that a million Chinese are starving unless you know one Chinese who is starving.” There needs to be an emotional connection for the thing to have any meaning.\r\n\r\nThere are several reasons to having a preferred language. However, our language might become drab at times. It is no longer maintained by the firm that makes it, or people quit using it for some unexplained reason.\r\n\r\nOther languages, such as C, which continues to be the most popular programming language in many circumstances, have withstood the test of time.\r\n\r\nThe point is that programming languages appear to have a life cycle, and the end appears to have arrived for some.\r\n\r\nHere are several languages whose future appears to be bleak:\r\n1. Visual Basic .NET\r\n\r\nThere used to be Visual Basic 6, but Microsoft appears to have wished to do rid with it and instead launched the VisualBasic .NET program. However, migrating everything to this new version of Visual Basic appears to be an excruciatingly tough operation.\r\n\r\nThis is notable because, in 1991, Microsoft enhanced the BASIC language by purchasing a graphic designer from Alan Cooper to include it into the language.\r\n\r\nCooper used another language at first, but Gates instructed him to change it to BASIC, which the former Microsoft CEO believed was the easiest language to learn.\r\n\r\nAs a result, Visual Basic was formed, ultimately including objects and sophisticated programming techniques.\r\n\r\nBut then something happened: Anders Hejlsberg, the man in charge of Delphi (at Borland), left the business to join Microsoft, where he started the C# project.\r\n\r\nThis language is similar to Java in many aspects, and after some time, C# became Microsoft’s new language standard. Simultaneously with the birth of C#, Microsoft programmers invented VisualBasic .NET, which has the same syntax as BASIC but the code mimics that of C#.\r\n\r\nBoth languages made their presence known, but C# appears to have won the popularity contest. For this reason, it appears that Visual Basic is condemned to extinction.\r\n2. Delphi\r\n\r\nDelphi, which is just Pascal plus Objects, is most likely on its way out. Embarcadero has attempted to support it, and new versions are still being released. Perhaps what transpired was a series of strategic blunders on Borland’s part.\r\n\r\nFor starters, they changed their name to Imprise for whatever reason. However, this did not work. They reverted to the previous moniker and abruptly separated their database tools from their programming tools.\r\n\r\nThe latter was renamed CodeGear, but for some reason, people began to suspect that something was wrong: so many name changes, so many strategy changes began to drive away its supporters.\r\n\r\nIt remains to be seen whether Embarcadero’s ongoing efforts can keep Delphi afloat, but it is evident that Delphi is losing favor in the programming world. Perhaps it’s time to switch to a different platform.', '2023-03-23 23:20:15', '2023-05-17 16:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'zoom', '641e82ab01f4c250323051211.png', 'active', '2023-03-23 23:12:11', '2023-03-23 23:12:11'),
(2, 'otobi', '641e82b368aab250323051219.png', 'active', '2023-03-23 23:12:19', '2023-03-23 23:12:19'),
(3, 'google', '641e82c360a84250323051235.png', 'active', '2023-03-23 23:12:35', '2023-03-23 23:12:35'),
(4, 'nike', '641e82ca4b1f9250323051242.png', 'active', '2023-03-23 23:12:42', '2023-03-23 23:12:42'),
(5, 'adata', '641e82d725663250323051255.png', 'active', '2023-03-23 23:12:55', '2023-03-23 23:12:55'),
(6, 'apple', '641e82e01095b250323051304.png', 'active', '2023-03-23 23:13:04', '2023-03-23 23:13:04'),
(7, 'intel', '641e82e87f89f250323051312.png', 'active', '2023-03-23 23:13:12', '2023-03-23 23:13:12'),
(8, 'ryzen', '641e82f31eb2c250323051323.png', 'active', '2023-03-23 23:13:23', '2023-03-23 23:13:23'),
(9, 'adidas', '641e82feca485250323051334.png', 'active', '2023-03-23 23:13:34', '2023-03-23 23:13:34'),
(10, 'casio', '641e830a36302250323051346.png', 'active', '2023-03-23 23:13:46', '2023-03-23 23:13:46'),
(11, 'aven', '641e83124e463250323051354.png', 'active', '2023-03-23 23:13:54', '2023-03-23 23:13:54'),
(12, 'kanba', '641e831ea060e250323051406.png', 'active', '2023-03-23 23:14:06', '2023-03-23 23:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` bigint UNSIGNED DEFAULT NULL,
  `product_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_icon` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `category_icon`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Laptop Computer', 'Laptop-Computer', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-pc-display-horizontal\" viewBox=\"0 0 16 16\">   <path d=\"M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z\"/> </svg>', 'active', '2023-03-23 16:48:17', '2023-05-10 20:21:28'),
(4, 'cameras', 'cameras', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-camera\" viewBox=\"0 0 16 16\">   <path d=\"M15 12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1h1.172a3 3 0 0 0 2.12-.879l.83-.828A1 1 0 0 1 6.827 3h2.344a1 1 0 0 1 .707.293l.828.828A3 3 0 0 0 12.828 5H14a1 1 0 0 1 1 1v6zM2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2z\"/>   <path d=\"M8 11a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5zm0 1a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7zM3 6.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z\"/> </svg>', 'active', '2023-03-23 16:55:12', '2023-05-10 20:35:17'),
(5, 'mobile', 'mobile', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-phone-flip\" viewBox=\"0 0 16 16\">   <path fill-rule=\"evenodd\" d=\"M11 1H5a1 1 0 0 0-1 1v6a.5.5 0 0 1-1 0V2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a.5.5 0 0 1-1 0V2a1 1 0 0 0-1-1Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2a.5.5 0 0 0-1 0v2a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-2a.5.5 0 0 0-1 0v2ZM1.713 7.954a.5.5 0 1 0-.419-.908c-.347.16-.654.348-.882.57C.184 7.842 0 8.139 0 8.5c0 .546.408.94.823 1.201.44.278 1.043.51 1.745.696C3.978 10.773 5.898 11 8 11c.099 0 .197 0 .294-.002l-1.148 1.148a.5.5 0 0 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2a.5.5 0 1 0-.708.708l1.145 1.144L8 10c-2.04 0-3.87-.221-5.174-.569-.656-.175-1.151-.374-1.47-.575C1.012 8.639 1 8.506 1 8.5c0-.003 0-.059.112-.17.115-.112.31-.242.6-.376Zm12.993-.908a.5.5 0 0 0-.419.908c.292.134.486.264.6.377.113.11.113.166.113.169 0 .003 0 .065-.13.187-.132.122-.352.26-.677.4-.645.28-1.596.523-2.763.687a.5.5 0 0 0 .14.99c1.212-.17 2.26-.43 3.02-.758.38-.164.713-.357.96-.587.246-.229.45-.537.45-.919 0-.362-.184-.66-.412-.883-.228-.223-.535-.411-.882-.571ZM7.5 2a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1Z\"/> </svg>', 'active', '2023-03-23 16:55:22', '2023-05-10 20:34:54'),
(6, 'Watch', 'Watch', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-stopwatch\" viewBox=\"0 0 16 16\">   <path d=\"M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z\"/>   <path d=\"M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z\"/> </svg>', 'active', '2023-03-23 16:58:11', '2023-05-19 15:45:17'),
(7, 'Glass', 'Glass', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-cup-straw\" viewBox=\"0 0 16 16\">   <path d=\"M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085l.18-.808zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006l-.005-.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006zM11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222z\"/> </svg>', 'active', '2023-03-23 16:59:27', '2023-05-10 20:34:06'),
(8, 'bags', 'bags', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-bag-check\" viewBox=\"0 0 16 16\">   <path fill-rule=\"evenodd\" d=\"M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z\"/>   <path d=\"M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z\"/> </svg>', 'active', '2023-03-23 17:00:34', '2023-05-10 20:33:08'),
(9, 'shoes', 'shoes', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-alipay\" viewBox=\"0 0 16 16\">   <path d=\"M2.541 0H13.5a2.551 2.551 0 0 1 2.54 2.563v8.297c-.006 0-.531-.046-2.978-.813-.412-.14-.916-.327-1.479-.536-.303-.113-.624-.232-.957-.353a12.98 12.98 0 0 0 1.325-3.373H8.822V4.649h3.831v-.634h-3.83V2.121H7.26c-.274 0-.274.273-.274.273v1.621H3.11v.634h3.875v1.136h-3.2v.634H9.99c-.227.789-.532 1.53-.894 2.202-2.013-.67-4.161-1.212-5.51-.878-.864.214-1.42.597-1.746.998-1.499 1.84-.424 4.633 2.741 4.633 1.872 0 3.675-1.053 5.072-2.787 2.08 1.008 6.37 2.738 6.387 2.745v.105A2.551 2.551 0 0 1 13.5 16H2.541A2.552 2.552 0 0 1 0 13.437V2.563A2.552 2.552 0 0 1 2.541 0Z\"/>   <path d=\"M2.309 9.27c-1.22 1.073-.49 3.034 1.978 3.034 1.434 0 2.868-.925 3.994-2.406-1.602-.789-2.959-1.353-4.425-1.207-.397.04-1.14.217-1.547.58Z\"/> </svg>', 'active', '2023-03-23 17:00:45', '2023-05-10 20:32:29'),
(10, 'vehicle', 'vehicle', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-hdd-rack\" viewBox=\"0 0 16 16\">   <path d=\"M4.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zM3 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm2 7a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2.5.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z\"/>   <path d=\"M2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h1v2H2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2h-1V7h1a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm0 7v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-3-4v2H4V7h8z\"/> </svg>', 'active', '2023-03-23 17:02:02', '2023-05-19 15:45:19'),
(11, 'safety', 'safety', '<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-safe\" viewBox=\"0 0 16 16\">   <path d=\"M1 1.5A1.5 1.5 0 0 1 2.5 0h12A1.5 1.5 0 0 1 16 1.5v13a1.5 1.5 0 0 1-1.5 1.5h-12A1.5 1.5 0 0 1 1 14.5V13H.5a.5.5 0 0 1 0-1H1V8.5H.5a.5.5 0 0 1 0-1H1V4H.5a.5.5 0 0 1 0-1H1V1.5zM2.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 .5.5h12a.5.5 0 0 0 .5-.5v-13a.5.5 0 0 0-.5-.5h-12z\"/>   <path d=\"M13.5 6a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zM4.828 4.464a.5.5 0 0 1 .708 0l1.09 1.09a3.003 3.003 0 0 1 3.476 0l1.09-1.09a.5.5 0 1 1 .707.708l-1.09 1.09c.74 1.037.74 2.44 0 3.476l1.09 1.09a.5.5 0 1 1-.707.708l-1.09-1.09a3.002 3.002 0 0 1-3.476 0l-1.09 1.09a.5.5 0 1 1-.708-.708l1.09-1.09a3.003 3.003 0 0 1 0-3.476l-1.09-1.09a.5.5 0 0 1 0-.708zM6.95 6.586a2 2 0 1 0 2.828 2.828A2 2 0 0 0 6.95 6.586z\"/> </svg>', 'active', '2023-03-24 08:25:18', '2023-05-19 15:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `email`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'thank your for your message', 'active', '2023-06-20 08:21:51', '2023-06-20 08:21:51'),
(2, NULL, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'tnq for your message', 'active', '2023-06-20 08:22:30', '2023-06-20 08:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_03_235058_create_sessions_table', 1),
(7, '2023_03_06_023556_create_blogs_table', 1),
(8, '2023_03_14_013113_create_categories_table', 1),
(9, '2023_03_14_043647_create_subcategories_table', 1),
(10, '2023_03_20_082859_create_brands_table', 1),
(11, '2023_03_21_085801_create_products_table', 1),
(12, '2023_03_28_045917_create_carts_table', 1),
(13, '2023_05_01_094352_create_wishlists_table', 1),
(14, '2023_05_02_090221_create_orders_table', 1),
(15, '2023_05_22_080840_create_sub_orders_table', 1),
(16, '2023_05_28_085825_create_transactions_table', 1),
(17, '2023_06_20_140956_create_messages_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `shipping_charge` decimal(8,2) NOT NULL DEFAULT '0.00',
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `name`, `email`, `address`, `phone`, `total_price`, `shipping_charge`, `payment_status`, `delivery_status`, `created_at`, `updated_at`) VALUES
(13, 2, '648424a7e39ed', 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 25.00, 0.00, 'Cash On Delivery', 'processing', '2023-06-09 19:22:15', '2023-06-21 08:31:39'),
(16, 3, '6484956b704f3', 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 25.00, 0.00, 'paypal payment', 'processing', '2023-06-10 09:23:23', '2023-06-21 08:42:40'),
(17, 3, '64849596ebfd0', 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 44.00, 0.00, 'Stripe payment', 'processing', '2023-06-10 09:24:06', '2023-06-21 08:38:07'),
(18, 2, '6491287b47d14', 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 25.00, 0.00, 'Cash On Delivery', 'processing', '2023-06-19 22:18:03', '2023-06-21 08:31:20'),
(19, 2, '64912d6685391', 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 25.00, 0.00, 'paid', 'processing', '2023-06-19 22:39:02', '2023-06-21 08:31:08'),
(20, 3, '6492aee67a197', 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 354.00, 0.00, 'Cash On Delivery', 'processing', '2023-06-21 02:03:50', '2023-06-21 08:37:20'),
(21, 3, '6492af1a19db0', 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 22.00, 0.00, 'Cash On Delivery', 'cancel', '2023-06-21 02:04:42', '2023-06-21 09:17:43'),
(22, 3, '6492af3e5555d', 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 235.00, 0.00, 'paid', 'cancel', '2023-06-21 02:05:18', '2023-06-21 08:46:25'),
(23, 3, '6492b0b87d4b7', 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 709.32, 0.00, 'Cash On Delivery', 'cancel', '2023-06-21 02:11:36', '2023-06-21 08:46:14'),
(24, 2, '6492ffc94c5d8', 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 94.00, 0.00, 'Cash On Delivery', 'processing', '2023-06-21 07:48:57', '2023-06-21 08:22:30'),
(25, 3, '64930cf8cb351', 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 122.00, 0.00, 'Cash On Delivery', 'cancel', '2023-06-21 08:45:12', '2023-06-21 08:45:42');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `subcategory_id` bigint UNSIGNED NOT NULL,
  `brand_id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` decimal(8,2) NOT NULL,
  `product_discount` decimal(8,2) DEFAULT NULL,
  `product_quantity` bigint UNSIGNED NOT NULL,
  `product_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `subcategory_id`, `brand_id`, `product_name`, `product_title`, `product_price`, `product_discount`, `product_quantity`, `product_photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 18, 6, 'Iphone 14 Pro Max', 'Iphone 14 Pro Max - Apple A16 Bionic (5 nm)', 339.00, 3.00, 52, '641e97bbdf21d250323064203.jpeg', 'MPN: 81WD004RIN\r\n    Model: IdeaPad Slim 3i\r\n    Intel Core i3-1005G1 Processor (4M Cache,1.20 GHz up to 3.40 GHz)\r\n    4GB DDR4 RAM + 1TB HDD\r\n    14 \"FHD (1920x1080) IPS Display\r\n    Windows 10 Home', 'active', '2023-03-24 00:42:03', '2023-06-21 08:46:14'),
(2, 1, 15, 4, 'shose', 'Adidas Originals ZX 750 Check , UK Mens Shoes For Gym Trainers', 120.00, NULL, 50, '641e983d22a59250323064413.png', 'Adidas Originals ZX 750 Check , UK Mens Shoes For Gym Trainers', 'active', '2023-03-24 00:44:13', '2023-05-27 21:39:38'),
(3, 1, 13, 11, 'Sunglass for girls', 'Love Shape With Butterfly Design Sunglass for girls', 50.00, 5.00, 50, '641ea9d611768250323075918.jpeg', 'Lens materials: High-Quality Polycarbonate\r\n    Protection : UV-400, Anti-glare\r\n    Frame Materials: Metal/Acetate\r\n    With Orginal Box\r\n    High-Quality Polycarbonate lens.\r\n    UV-400 Protection\r\n    Anti-glare', 'active', '2023-03-24 01:59:18', '2023-05-23 03:54:19'),
(5, 1, 9, 11, 'Digital DSLR Camera Body 45.7MP', 'Nikon D850 Digital DSLR Camera Body 45.7MP 4K FX-format', 700.00, 6.00, 50, '641eaaf6aa2bc250323080406.jpeg', 'High-Speed Continuous Shooting of up to 7.0 fps\r\n\r\nWith the ability to help capture multiple shots with practically no time wasted, the EOS Rebel T8i camera is equipped with a DIGIC 8 Image Processor that allows the camera to perform quickly and shoot up to 7 frames per second (up to 7.5 fps during live view shooting). The EOS Rebel T8i camera is tailored to meet and even exceed the speed of the action while shooting through the optical viewfinder - ideal for sports, wildlife, moving subjects or anything unpredictable.\r\n\r\n4K 24p Video\r\n\r\nCapture 4K videos at a frame rate of up to 24p for high definition, cinematic results. Recording at almost four times the resolution of Full HD, you can see your subject in stunning clarity. Beautiful time-lapse videos can also be created in 4K simply and easily with the dedicated Time-lapse Movie mode.\r\n\r\nContrast AF is used for 4K UHD movies.\r\novies.', 'active', '2023-03-24 02:04:06', '2023-06-03 20:17:59'),
(6, 1, 14, 9, 'Cotton Bag For Woman', 'Exclusive Design Fashionable Cotton Bag For Woman', 39.00, 5.00, 50, '641eadc60a704250323081606.jpeg', 'Products : Cross Body Shoulder Bag For Girls\r\n    Import From China\r\n    Best Quality\r\n    Gender: Women\r\n    Brand: amicizia\r\n    Material: PU Leather\r\n    Comfortable and Fashionable\r\n    Looks Style', 'active', '2023-03-24 08:16:06', '2023-06-09 19:52:55'),
(7, 1, 15, 4, 'Sports Shoe', 'Modern Style Adjustable Sports Shoe for Men -Blue', 45.00, 7.00, 50, '641eae1be08ed250323081731.jpeg', 'Adjustable. There should be an adjustable strap such as laces or Velcro which allows for adjustment depending on an individual\'s needs.\r\n    Stable. ...\r\n    Roomy enough. ...\r\n    Max 2.5cm (1 inch) heel. ...\r\n    In good condition.', 'active', '2023-03-24 08:17:31', '2023-06-03 20:17:57'),
(8, 1, 3, 8, 'Ryzen 7 7200G Processor', 'Amd Ryzen 7 7200G Processor With Builtin Graphic', 350.00, 6.00, 50, '641eaf10121a7250323082136.png', 'Amd Ryzen 7 7200G Processor With Builtin Graphic', 'active', '2023-03-24 08:21:36', '2023-06-21 08:37:20'),
(9, 1, 14, 9, 'Waterproof Bag', 'Exclusive Waterproof Bag Best for Regular Use', 22.00, NULL, 56, '641eaf7a30ece250323082322.jpeg', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', 'active', '2023-03-24 08:23:22', '2023-06-21 09:17:43'),
(10, 1, 19, 4, 'Helmet for bicycle', 'Awesome Looking Red Pattern Helmet for bicycle', 25.00, NULL, 55, '641eb07701ded250323082735.jpeg', 'ADJUSTABLE SIZE: Measure the circumference slightly above eye brows to ensure you choose the correct size.\r\nPERFECT GIFT FOR KIDS: The Kids Helmet Great for skateboarding, cycling, BMX biking, inline & roller skating, scooter ,tricycle,Outdoor or indoor activities which need impact protection gear.Helmet Great Suitable for the needs of boys or girls.', 'active', '2023-03-24 08:27:35', '2023-06-21 08:46:25'),
(12, 1, 15, 4, 'Nike Air Jordan Shoes', 'Nike Air Jordan 1 Retro High OG White Black Volt 5550 Men\'s GS Sizes', 45.00, 10.00, 52, '646c88138f492230523093203.jpeg', 'Adjustable. There should be an adjustable strap such as laces or Velcro which allows for adjustment depending on an individual\'s needs. Stable. ... Roomy enough. ... Max 2.5cm (1 inch) heel. ... In good condition.', 'active', '2023-05-22 21:32:03', '2023-06-21 08:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('floxHeqCzt2I9vBVzEBJqYwRxCpkYuCH6TD1e10M', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/114.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUDd6ZW5semlyb3Q1d2RYVlJON3A4WkQ4eThyWkZLdkhBeVd2T2k1bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9teS1wdXJjaGFzZS1vcmRlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkd3A4cDRyWWtqV0hmcnpoblNaVTdGT0EyYVJJV25zV2JCOXJoWEIySUtjNzhwMFo0bEw3ZUciO30=', 1687360666),
('MTxO8gb9eh2siqRp844pbmscaL4sa05ZoXMayoXo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/115.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRnM2cXBLNWpWeXZkMnNseTVSRE5GWVZKOXd5S3VyNFpHSE9xRFBRSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1689820988),
('UbmSpiS3iO9sbC47MyaD43A1WZVDOnkDFFjIvHjz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGtteVE3TEc3REg1VHozcWMxUmwwMjMySEZmY0h4T3R1bXFQRWdWViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1689225928),
('xHEnHOEXyakay4K3XgyWL4HM6D4LxH2bWZgRRARR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVE5jMmVPS1g1RjF4UW1UUFhzVVhPdlBTMUtNNlZ1NjMwcHp3YjhUTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1689825024),
('xVPnsrCNhDAegGCBrKtPSQISNENCay8mJl5VCvr7', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZkZ4Wkx3VFRmb0F3SHFWRHo1QUtOaXNSQzRmT1dQclpqTlN3OFFIeCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vcmRlci9pbmRleCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkYnNIWGRRWHlGZlpEalZOZUZmRTdwZXQyZVRFL25rdXV6N2tjVHFOckRUdUFxNENRb1RCT1ciO30=', 1687360664);

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_icon` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `subcategory_icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'computer', 'computer', NULL, 'inactive', '2023-03-23 16:48:36', '2023-05-19 15:52:09'),
(2, 2, 'amp computer', 'amp-computer', NULL, 'inactive', '2023-03-23 16:48:52', '2023-05-19 15:51:59'),
(3, 2, 'Ryzen', 'Ryzen', NULL, 'active', '2023-03-23 16:49:13', '2023-03-24 08:20:32'),
(4, 2, 'loptop', 'loptop', NULL, 'inactive', '2023-03-23 16:49:23', '2023-05-19 15:51:30'),
(5, 2, 'Samsung Galaxy Note 20', 'Samsung-Galaxy-Note-20', NULL, 'inactive', '2023-03-23 16:49:53', '2023-05-19 15:51:16'),
(6, 2, 'Monitor', 'Monitor', NULL, 'inactive', '2023-03-23 16:51:21', '2023-05-19 15:50:52'),
(7, 2, 'DEll Package 1', 'DEll-Package-1', NULL, 'inactive', '2023-03-23 16:51:30', '2023-05-19 15:47:17'),
(8, 2, 'Asus Monitor', 'Asus-Monitor', NULL, 'inactive', '2023-03-23 16:51:44', '2023-05-19 15:33:03'),
(9, 4, 'camera', 'camera', NULL, 'inactive', '2023-03-23 16:56:01', '2023-05-19 15:37:44'),
(10, 4, 'ip camera', 'ip-camera', NULL, 'inactive', '2023-03-23 16:56:09', '2023-05-19 15:46:50'),
(11, 5, 'mobile', 'mobile', NULL, 'inactive', '2023-03-23 16:56:15', '2023-05-19 15:46:25'),
(12, 6, 'Watch', 'Watch', NULL, 'inactive', '2023-03-23 16:58:20', '2023-05-19 15:46:00'),
(13, 7, 'Glass', 'Glass', NULL, 'active', '2023-03-23 16:59:36', '2023-03-23 16:59:36'),
(14, 8, 'bag', 'bag', NULL, 'active', '2023-03-23 17:00:57', '2023-03-23 17:00:57'),
(15, 9, 'shoes', 'shoes', NULL, 'active', '2023-03-23 17:01:03', '2023-03-23 17:01:03'),
(16, 10, 'car', 'car', NULL, 'inactive', '2023-03-23 17:02:13', '2023-05-19 15:43:58'),
(17, 10, 'motorcycle', 'motorcycle', NULL, 'inactive', '2023-03-23 17:02:48', '2023-05-19 15:45:27'),
(18, 5, 'apple', 'apple', NULL, 'active', '2023-03-23 17:47:43', '2023-05-19 15:38:21'),
(19, 11, 'helmet', 'helmet', NULL, 'active', '2023-03-24 08:26:25', '2023-05-19 15:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `sub_orders`
--

CREATE TABLE `sub_orders` (
  `id` bigint UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `product_discount` decimal(8,2) DEFAULT NULL,
  `product_total_price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `product_qty` bigint UNSIGNED DEFAULT NULL,
  `product_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_orders`
--

INSERT INTO `sub_orders` (`id`, `order_id`, `product_id`, `name`, `email`, `address`, `phone`, `product_name`, `product_price`, `product_discount`, `product_total_price`, `product_qty`, `product_photo`, `created_at`, `updated_at`) VALUES
(9, '646cefb4c8ef3', 9, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Waterproof Bag', 22.00, NULL, 22.00, 1, '641eaf7a30ece250323082322.jpeg', '2023-05-23 04:54:12', '2023-05-23 04:54:12'),
(11, '64731c5ee93fb', 12, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Nike Air Jordan Shoes', 45.00, 10.00, 72.00, 2, '646c88138f492230523093203.jpeg', '2023-05-27 21:18:22', '2023-05-27 21:18:22'),
(12, '64731c5ee93fb', 8, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Ryzen 7 7200G Processor', 350.00, 6.00, 329.00, 1, '641eaf10121a7250323082136.png', '2023-05-27 21:18:27', '2023-05-27 21:18:27'),
(13, '64732154962af', 7, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Sports Shoe', 45.00, 7.00, 41.85, 1, '641eae1be08ed250323081731.jpeg', '2023-05-27 21:39:32', '2023-05-27 21:39:32'),
(14, '64732154962af', 2, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'shose', 120.00, NULL, 120.00, 1, '641e983d22a59250323064413.png', '2023-05-27 21:39:36', '2023-05-27 21:39:36'),
(15, '647c48af34278', 7, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Sports Shoe', 45.00, 7.00, 77.40, 2, '641eae1be08ed250323081731.jpeg', '2023-06-03 20:17:51', '2023-06-03 20:17:51'),
(16, '647c48af34278', 5, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Digital DSLR Camera Body 45.7MP', 700.00, 6.00, 658.00, 1, '641eaaf6aa2bc250323080406.jpeg', '2023-06-03 20:17:57', '2023-06-03 20:17:57'),
(19, '648424a7e39ed', 10, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Helmet for bicycle', 25.00, NULL, 25.00, 1, '641eb07701ded250323082735.jpeg', '2023-06-09 19:22:15', '2023-06-09 19:22:15'),
(20, '64842bd4448c0', 6, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Cotton Bag For Woman', 39.00, 5.00, 37.05, 1, '641eadc60a704250323081606.jpeg', '2023-06-09 19:52:52', '2023-06-09 19:52:52'),
(21, '6484910a81129', 12, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Nike Air Jordan Shoes', 45.00, 10.00, 40.50, 1, '646c88138f492230523093203.jpeg', '2023-06-10 09:04:42', '2023-06-10 09:04:42'),
(22, '6484956b704f3', 10, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Helmet for bicycle', 25.00, NULL, 25.00, 1, '641eb07701ded250323082735.jpeg', '2023-06-10 09:23:23', '2023-06-10 09:23:23'),
(23, '64849596ebfd0', 9, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Waterproof Bag', 22.00, NULL, 44.00, 2, '641eaf7a30ece250323082322.jpeg', '2023-06-10 09:24:06', '2023-06-10 09:24:06'),
(24, '6491287b47d14', 10, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Helmet for bicycle', 25.00, NULL, 25.00, 1, '641eb07701ded250323082735.jpeg', '2023-06-19 22:18:03', '2023-06-19 22:18:03'),
(25, '64912d6685391', 10, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Helmet for bicycle', 25.00, NULL, 25.00, 1, '641eb07701ded250323082735.jpeg', '2023-06-19 22:39:02', '2023-06-19 22:39:02'),
(26, '6492aee67a197', 10, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Helmet for bicycle', 25.00, NULL, 25.00, 1, '641eb07701ded250323082735.jpeg', '2023-06-21 02:03:50', '2023-06-21 02:03:50'),
(27, '6492aee67a197', 8, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Ryzen 7 7200G Processor', 350.00, 6.00, 329.00, 1, '641eaf10121a7250323082136.png', '2023-06-21 02:03:54', '2023-06-21 02:03:54'),
(28, '6492af1a19db0', 9, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Waterproof Bag', 22.00, NULL, 22.00, 1, '641eaf7a30ece250323082322.jpeg', '2023-06-21 02:04:42', '2023-06-21 02:04:42'),
(29, '6492af3e5555d', 9, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Waterproof Bag', 22.00, NULL, 110.00, 5, '641eaf7a30ece250323082322.jpeg', '2023-06-21 02:05:18', '2023-06-21 02:05:18'),
(30, '6492af3e5555d', 10, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Helmet for bicycle', 25.00, NULL, 125.00, 5, '641eb07701ded250323082735.jpeg', '2023-06-21 02:05:22', '2023-06-21 02:05:22'),
(31, '6492b0b87d4b7', 12, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Nike Air Jordan Shoes', 45.00, 10.00, 72.00, 2, '646c88138f492230523093203.jpeg', '2023-06-21 02:11:36', '2023-06-21 02:11:36'),
(32, '6492b0b87d4b7', 1, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Iphone 14 Pro Max', 339.00, 3.00, 637.32, 2, '641e97bbdf21d250323064203.jpeg', '2023-06-21 02:11:40', '2023-06-21 02:11:40'),
(33, '6492ffc94c5d8', 9, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Waterproof Bag', 22.00, NULL, 44.00, 2, '641eaf7a30ece250323082322.jpeg', '2023-06-21 07:48:57', '2023-06-21 07:48:57'),
(34, '6492ffc94c5d8', 10, 'kawsar ahmed', 'kawsargaming100@gmail.com', 'pabna', '01746755225', 'Helmet for bicycle', 25.00, NULL, 50.00, 2, '641eb07701ded250323082735.jpeg', '2023-06-21 07:49:03', '2023-06-21 07:49:03'),
(35, '64930cf8cb351', 12, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Nike Air Jordan Shoes', 45.00, 10.00, 72.00, 2, '646c88138f492230523093203.jpeg', '2023-06-21 08:45:12', '2023-06-21 08:45:12'),
(36, '64930cf8cb351', 10, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', 'pabna sadar', '01746755225', 'Helmet for bicycle', 25.00, NULL, 50.00, 2, '641eb07701ded250323082735.jpeg', '2023-06-21 08:45:17', '2023-06-21 08:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int DEFAULT NULL,
  `gateway` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operation` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `transaction_id`, `type`, `gateway`, `amount`, `description`, `status`, `operation`, `created_at`, `updated_at`) VALUES
(1, 2, '647322145e393', 1, 'Cash On Delivery', '401.00', 'your order canceled', 'active', NULL, '2023-05-27 21:42:44', '2023-05-27 21:42:44'),
(2, 3, '6473221d7dc50', 1, 'Cash On Delivery', '161.85', 'your order canceled', 'active', NULL, '2023-05-27 21:42:53', '2023-05-27 21:42:53'),
(5, 2, '6484300ae8ac7', 1, 'Cash On Delivery', '25.00', 'your order canceled', 'active', NULL, '2023-06-09 20:10:50', '2023-06-09 20:10:50'),
(6, 2, '64848b6727ce4', 1, 'Cash On Delivery', '25.00', 'your order canceled', 'active', NULL, '2023-06-10 08:40:39', '2023-06-10 08:40:39'),
(7, 2, '64848b8b7665a', 1, 'Cash On Delivery', '25.00', 'your order canceled', 'active', NULL, '2023-06-10 08:41:15', '2023-06-10 08:41:15'),
(8, 2, '64848f9d11c59', 1, 'Cash On Delivery', '25.00', 'your order canceled', 'active', NULL, '2023-06-10 08:58:37', '2023-06-10 08:58:37'),
(9, 2, '64848fd898cf2', 1, 'Cash On Delivery', '25.00', 'your order canceled', 'active', NULL, '2023-06-10 08:59:36', '2023-06-10 08:59:36'),
(10, 2, '648490e657939', 1, 'Cash On Delivery', '37.05', 'your order canceled', 'active', NULL, '2023-06-10 09:04:06', '2023-06-10 09:04:06'),
(11, 3, '6484912299d19', 1, 'Cash On Delivery', '40.50', 'your order canceled', 'active', NULL, '2023-06-10 09:05:06', '2023-06-10 09:05:06'),
(12, 3, '648491343ea6e', 1, 'Cash On Delivery', '40.50', 'your order canceled', 'active', NULL, '2023-06-10 09:05:24', '2023-06-10 09:05:24'),
(13, 3, '648494bf26ca1', 1, 'Cash On Delivery', '40.50', 'your order canceled', 'active', NULL, '2023-06-10 09:20:31', '2023-06-10 09:20:31'),
(14, 3, '64905dc49e79a', 1, 'paypal payment', '25.00', 'your order canceled', 'active', NULL, '2023-06-19 07:53:08', '2023-06-19 07:53:08'),
(15, 3, '64905ddcba16d', 1, 'Stripe payment', '44.00', 'your order canceled', 'active', NULL, '2023-06-19 07:53:32', '2023-06-19 07:53:32'),
(16, 2, '64912dda8ea78', 1, 'my acoount', '25.00', 'your order canceled', 'active', NULL, '2023-06-19 22:40:58', '2023-06-19 22:40:58'),
(17, 2, '6492aa84e64fa', 1, 'my acoount', '25.00', 'your order canceled', 'active', NULL, '2023-06-21 01:45:08', '2023-06-21 01:45:08'),
(18, 2, '6492aacbea22f', 1, 'my acoount', '25.00', 'your order canceled', 'active', NULL, '2023-06-21 01:46:19', '2023-06-21 01:46:19'),
(19, 3, '6492b16c2e1ac', 1, 'Cash On Delivery', '709.32', 'your order canceled', 'active', NULL, '2023-06-21 02:14:36', '2023-06-21 02:14:36'),
(20, 2, '6493008267d3b', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 07:52:02', '2023-06-21 07:52:02'),
(21, 2, '6493009b50c19', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 07:52:27', '2023-06-21 07:52:27'),
(22, 2, '649300ce23c1d', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 07:53:18', '2023-06-21 07:53:18'),
(23, 2, '649302a541844', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 08:01:09', '2023-06-21 08:01:09'),
(24, 2, '649302b7f112c', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 08:01:27', '2023-06-21 08:01:27'),
(25, 2, '649302e5b2807', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 08:02:13', '2023-06-21 08:02:13'),
(26, 2, '64930365da1e7', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 08:04:21', '2023-06-21 08:04:21'),
(27, 2, '64930395dab45', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 08:05:09', '2023-06-21 08:05:09'),
(28, 2, '6493044032e94', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 08:08:00', '2023-06-21 08:08:00'),
(29, 2, '64930495e1620', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 08:09:25', '2023-06-21 08:09:25'),
(30, 2, '649304e5461b9', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 08:10:45', '2023-06-21 08:10:45'),
(31, 2, '649307a6cfa5b', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 08:22:30', '2023-06-21 08:22:30'),
(32, 2, '649307e9509d2', 1, 'Cash On Delivery', '94.00', 'your order canceled', 'active', NULL, '2023-06-21 08:23:37', '2023-06-21 08:23:37'),
(33, 2, '649309b8125a9', 1, 'Cash On Delivery', '25.00', 'your order canceled', 'active', NULL, '2023-06-21 08:31:20', '2023-06-21 08:31:20'),
(34, 2, '649309cb7b3ac', 1, 'Cash On Delivery', '25.00', 'your order canceled', 'active', NULL, '2023-06-21 08:31:39', '2023-06-21 08:31:39'),
(35, 3, '649309ed4316c', 1, 'Cash On Delivery', '709.32', 'your order canceled', 'active', NULL, '2023-06-21 08:32:13', '2023-06-21 08:32:13'),
(36, 3, '64930b0028982', 1, 'Cash On Delivery', '22.00', 'your order canceled', 'active', NULL, '2023-06-21 08:36:48', '2023-06-21 08:36:48'),
(37, 3, '64930b209a09a', 1, 'Cash On Delivery', '354.00', 'your order canceled', 'active', NULL, '2023-06-21 08:37:20', '2023-06-21 08:37:20'),
(38, 3, '64930d1612e88', 1, 'Cash On Delivery', '122.00', 'your order canceled', 'active', NULL, '2023-06-21 08:45:42', '2023-06-21 08:45:42'),
(39, 3, '64930d36589fc', 1, 'Cash On Delivery', '709.32', 'your order canceled', 'active', NULL, '2023-06-21 08:46:14', '2023-06-21 08:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `condition` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `address`, `phone`, `profile_photo`, `country`, `state`, `city`, `postcode`, `note`, `balance`, `condition`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'kawsar ahmed', 'kawsarfaz100@gmail.com', '1', 'pabna sadar', '01746755225', NULL, NULL, NULL, NULL, NULL, NULL, '0', 0, '2023-03-24 14:09:17', '$2y$10$bsHXdQXyFfZDjVNeFfE7pet2eTE/nkuuz7kcTqNrDTuAq4CQoTBOW', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:08:59', '2023-03-24 14:09:17'),
(2, 'kawsar ahmed', 'kawsargaming100@gmail.com', '0', 'pabna', '01746755225', '644f7e41854e6010523085425.jpg', NULL, NULL, NULL, '6600', NULL, '1496.1', 0, '2023-03-24 14:10:15', '$2y$10$AlKiAhVkmfld1gzo8q1hheLzR29vxqwnvWIXXfkTlhdm488MEgC4S', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-24 14:09:53', '2023-06-21 08:31:39'),
(3, 'kawsar ahmed', 'kawsarahmed1512@gmail.com', '0', 'pabna sadar', '01746755225', NULL, 'bangladesh', 'pabna', 'pabna', '6600', NULL, '2816.46', 1, '2023-03-29 14:50:56', '$2y$10$wp8p4rYkjWHfrzhnSZU7FOA2aRIWnsWbB9rhXB2IKc78p0Z4lL7eG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-03-29 14:49:07', '2023-06-21 08:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `brand_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` bigint UNSIGNED DEFAULT NULL,
  `product_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_brand_name_unique` (`brand_name`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_name_unique` (`category_name`),
  ADD UNIQUE KEY `categories_category_slug_unique` (`category_slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategories_subcategory_name_unique` (`subcategory_name`),
  ADD UNIQUE KEY `subcategories_subcategory_slug_unique` (`subcategory_slug`),
  ADD KEY `subcategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `sub_orders`
--
ALTER TABLE `sub_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_brand_id_foreign` (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_orders`
--
ALTER TABLE `sub_orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_orders`
--
ALTER TABLE `sub_orders`
  ADD CONSTRAINT `sub_orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
