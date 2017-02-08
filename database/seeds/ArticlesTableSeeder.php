<?php

use App\Article;
use App\Category;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$name = [];
    	$category_id = [];

        $name[0] = 'Arts and Entertainment';
		$name[1] = 'Computers and Electronics';
		$name[2] = 'Educations and Communications';
		$name[3] = 'Food and Entertaining';
		$name[4] = 'Pets and Animals';
		
		$category_id[0] = Category::where('name', $name[0])->get()->first()->id;
		$category_id[1] = Category::where('name', $name[1])->get()->first()->id;
		$category_id[2] = Category::where('name', $name[2])->get()->first()->id;
		$category_id[3] = Category::where('name', $name[3])->get()->first()->id;
		$category_id[4] = Category::where('name', $name[4])->get()->first()->id;

		Article::create([
			'title' => 'Ariana Grande to star in Final Fantasy: Brave Exvius game',
			'slug' => 'ariana-grande-to-star-in-final-fantasy-brave-exvius-game',
			'source' => 'BBC',
			'excerpt' => 'Ariana Grande will feature as an avatar in a Final Fantasy game.',
			'content' => 'It\'ll be used in the free mobile release of Final Fantasy: Brave Exvius and it\'s \"the cutest\" character she\'s ever seen.\r\nPosting on Instagram she wrote: \"I\'m so excited and in love with it i cannot contain myself.\"\r\nMore than 8m gamers have played Brave Exvius worldwide since it was first released in Japan in 2015 on Android and iOS.',
			'category_id' => $category_id[0],
		]);

		Article::create([
			'title' => 'Mariah Carey: Row over New Year\'s Eve performance',
			'slug' => 'mariah-carey-row-over-new-year-s-eve-performance',
			'source' => 'BBC',
			'excerpt' => 'Mariah Carey: Row over New Year\'s Eve performance',
			'content' => 'Watch an excerpt from Mariah Carey\'s New Year\'s Eve performance, which went wrong with the singer complaining of sound difficulties.\r\nHer representative has since told Billboard the producers \"set her up to fail\", which Dick Clark Productions has furiously denied.',
			'category_id' => $category_id[0],
		]);

		Article::create([
			'title' => 'Mark Zuckerberg criticizes Trump on immigration',
			'slug' => 'mark-zuckerberg-criticizes-trump-on-immigration',
			'source' => 'CNN',
			'excerpt' => 'Mark Zuckerberg has decided to speak up against President Trump.',
			'content' => '\"Like many of you, I\'m concerned about the impact of the recent executive orders signed by President Trump,\" Zuckerberg wrote in a Facebook post, which cited his family\'s immigrant background and his volunteer work with undocumented schoolchildren.\r\n\"We should also keep our doors open to refugees and those who need help,\" Zuckerberg wrote. \"That\'s who we are. Had we turned away refugees a few decades ago, Priscilla\'s family wouldn\'t be here today.\"\r\n\"We need to keep this country safe, but we should do that by focusing on people who actually pose a threat,\" Zuckerberg wrote. \"Expanding the focus of law enforcement beyond people who are real threats would make all Americans less safe by diverting resources, while millions of undocumented folks who don\'t pose a threat will live in fear of deportation.\"\r\n',
			'category_id' => $category_id[1],
		]);

		Article::create([
			'title' => 'Apple patents a vaporizer',
			'slug' => '',
			'source' => 'CNN',
			'excerpt' => 'A patent filed last year and published January 26 reveals a concept for a vaporizer.',
			'content' => 'Vaporizers are also used in industries like healthcare and agriculture, so it\'s possible Apple is thinking bigger than personal use.\r\nBut if Apple\'s future plans include making vapes for recreation, it would likely mean big corporations are getting into the weed business. Apple did not respond to a request for more information.',
			'category_id' => $category_id[1],
		]);

		Article::create([
			'title' => 'Trump\'s immigration ban triggers panic at universities',
			'slug' => 'trump-s-immigration-ban-triggers-panic-at-universities',
			'source' => 'CNN',
			'excerpt' => 'For U.S. university students from the seven countries in Trump\'s immigration ban, horror has set in.',
			'content' => 'Two days after President Trump signed an executive order restricting their travel, affected students and faculty members find themselves panicked by the uncertainty.\r\nSome fear they\'ll have to decide between their careers or their families. Some raced back to the United States as the executive order loomed, so they would be able to complete a degree. Now they\'re left to wonder when they\'ll get to see their families again if they remain in the United States.',
			'category_id' => $category_id[2],
		]);

		Article::create([
			'title' => 'South African e-learning to reach excluded',
			'slug' => 'south-african-e-learning-to-reach-excluded',
			'source' => 'BBC',
			'excerpt' => 'Tablets, laptops and digital learning are increasingly being used to reach students with little or no access to education.',
			'content' => 'This is especially crucial in the developing world, where Unesco says the digitilisation of learning could be a means of accelerating progress towards the Sustainable Development Goals, such as ensuring access to primary school for all children.\r\nThis process is already evident in Africa, which according to Unesco has 30 million primary-age children not attending school, over half the global total.\r\nYet the continent is overcoming challenges surrounding lack of internet access and electricity to become a major player in the e-learning space.',
			'category_id' => $category_id[2],
		]);

		Article::create([
			'title' => '7 Easy Ways To Eat Healthier This Week',
			'slug' => '7-easy-ways-to-eat-healthier-this-week',
			'source' => 'BuzzFeed',
			'excerpt' => 'You got this.',
			'content' => '1. For breakfast, upgrade oatmeal by adding some DIY strawberry-chia jam.\r\n2. For a lighter (but still delicious!) play on nachos, swap tortilla chips for bell pepper slices.\r\n3. Load up on seasonal fruits and veggies.\r\n4. Pick at least one night this week to ditch Pinterest and cook from a cookbook.\r\n5. Watching your salt intake? Bookmark these dinners that are low in sodium, but still high in flavor.\r\n6. Make healthyish dessert bites by combining bananas + peanut butter + dark chocolate.\r\n7. Looking for a weeknight dinner that basically makes itself? Try these sheet pan roasted veggie tacos.',
			'category_id' => $category_id[3],
		]);

		Article::create([
			'title' => '7 Easy And Healthy Meals Guaranteed To Get You Through The Week',
			'slug' => '7-easy-and-healthy-meals-guaranteed-to-get-you-through-the-week',
			'source' => 'BuzzFeed',
			'excerpt' => 'All you need for a flavorful week.',
			'content' => '1. 15-Minute Garlic Shrimp Zoodles\r\n2. Vegetarian Garlic Mushroom Quinoa\r\n3. One-Pan Crispy Chicken Legs & Brussels Sprouts\r\n4. Spaghetti Squash with Spinach, Parmesan, and a Fried Egg\r\n5. One-Pan Healthy Turkey Sausage And Veggies\r\n6. 30-Minute Clean Thai Turkey Zucchini Meatballs\r\n7. Roasted Rainbow Winter Bowl',
			'category_id' => $category_id[3],
		]);

		Article::create([
			'title' => 'That "Pets: Wild At Heart" hamster who filled his cheeks?',
			'slug' => 'that-pets-wild-at-heart-hamster-who-filled-his-cheeks',
			'source' => 'BBC',
			'excerpt' => 'When we first researched ideas for the series Pets: Wild at Heart, we never seriously considered the hamster - our thoughts were mainly on the larger, more popular pets. It was only when I visited the local pet store that things changed.',
			'content' => 'While looking at the hamsters, one particular fur ball stood out from the crowd. He was stuffing his cheeks in great haste as his cheeks stretched down the side of his body. He doubled in size before my eyes. The behaviour was visually funny and intriguing, so immediately I wanted to learn more about how those cheeks worked. His audition was a success.\r\nWe spent several weeks observing and filming him in the comforts of a typical home – my own. He was a joy. So intelligent, gentle and inquisitive. The original idea was to find a suitable home for the hamster after filming, but there was no need. After spending so long with him we were now the best of buddies and I became the proud owner of a hamster.',
			'category_id' => $category_id[4],
		]);

		Article::create([
			'title' => 'Cheetahs, tigers and lions now illegal pets in the UAE',
			'slug' => 'cheetahs-tigers-and-lions-now-illegal-pets-in-the-uae',
			'source' => 'CNN',
			'excerpt' => 'Cheetahs, tigers and lions have infamously become a status symbol in the oil-rich United Arab Emirates (UAE).',
			'content' => 'Anyone seen in public walking their exotic pet -- taking a tiger for a stroll may sound ludicrous, but is not unheard of in the UAE -- will have the animal confiscated and could face up to six months in jail, according to a copy of the law obtained by CNN.\r\nRonel Barcellos, manager of the Abu Dhabi Wildlife Center, told CNN: \"The UAE has come a long way ... I am happy to see that the law has been passed, but steps need to be taken to ensure that it is implemented properly.\"\r\nThe new law is effective immediately and owners are required to hand over their pets to the authorities.',
			'category_id' => $category_id[4],
		]);


    }
}
