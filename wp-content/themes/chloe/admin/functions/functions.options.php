<?php

add_action('init','of_options');

if (!function_exists('of_options'))
{
	function of_options()
	{

		//Access the WordPress Pages via an Array
		$of_pages                         = array();
		$of_pages_obj                 = get_pages('sort_column=post_parent,menu_order');
		foreach ($of_pages_obj as $of_page) {
		$of_pages[$of_page->ID] = $of_page->post_name; }
		$of_pages_tmp                 = array_unshift($of_pages, "Select a page:"); 
		
		$patterns = array(
			"none" => "none",
		    "45degreee_fabric" => "45degreee_fabric",
			"60degree_gray" => "60degree_gray",
			"absurdidad" => "absurdidad",
			"agsquare" => "agsquare",
			"always_grey" => "always_grey",
			"arab_tile" => "arab_tile",
			"arches" => "arches",
			"argyle" => "argyle",
			"asfalt" => "asfalt",
			"assault" => "assault",
			"az_subtle" => "az_subtle",
			"back_pattern" => "back_pattern",
			"batthern" => "batthern",
			"bedge_grunge" => "bedge_grunge",
			"beige_paper" => "beige_paper",
			"bgnoise_lg" => "bgnoise_lg",
			"billie_holiday" => "billie_holiday",
			"binding_dark" => "binding_dark",
			"binding_light" => "binding_light",
			"black-Linen" => "black-Linen",
			"black_denim" => "black_denim",
			"black_linen_v2" => "black_linen_v2",
			"black_lozenge" => "black_lozenge",
			"black_mamba" => "black_mamba",
			"black_paper" => "black_paper",
			"black_scales" => "black_scales",
			"black_thread" => "black_thread",
			"black_twill" => "black_twill",
			"blackmamba" => "blackmamba",
			"blackorchid" => "blackorchid",
			"blizzard" => "blizzard",
			"blu_stripes" => "blu_stripes",
			"bo_play_pattern" => "bo_play_pattern",
			"brickwall" => "brickwall",
			"bright_squares" => "bright_squares",
			"brillant" => "brillant",
			"broken_noise" => "broken_noise",
			"brushed_alu" => "brushed_alu",
			"brushed_alu_dark" => "brushed_alu_dark",
			"burried" => "burried",
			"candyhole" => "candyhole",
			"carbon_fibre" => "carbon_fibre",
			"carbon_fibre_big" => "carbon_fibre_big",
			"carbon_fibre_v2" => "carbon_fibre_v2",
			"cardboard" => "cardboard",
			"cardboard_1" => "cardboard_1",
			"cardboard_flat" => "cardboard_flat",
			"cartographer" => "cartographer",
			"checkered_pattern" => "checkered_pattern",
			"chruch" => "chruch",
			"circles" => "circles",
			"classy_fabric" => "classy_fabric",
			"clean_textile" => "clean_textile",
			"climpek" => "climpek",
			"cloth_alike" => "cloth_alike",
			"concrete_wall" => "concrete_wall",
			"concrete_wall_2" => "concrete_wall_2",
			"concrete_wall_3" => "concrete_wall_3",
			"connect" => "connect",
			"cork_1" => "cork_1",
			"corrugation" => "corrugation",
			"cracks_1" => "cracks_1",
			"cream_dust" => "cream_dust",
			"cream_pixels" => "cream_pixels",
			"creampaper" => "creampaper",
			"crisp_paper_ruffles" => "crisp_paper_ruffles",
			"crissXcross" => "crissXcross",
			"cross_scratches" => "cross_scratches",
			"crossed_stripes" => "crossed_stripes",
			"crosses" => "crosses",
			"cubes" => "cubes",
			"cutcube" => "cutcube",
			"daimond_eyes" => "daimond_eyes",
			"dark_Tire" => "dark_Tire",
			"dark_brick_wall" => "dark_brick_wall",
			"dark_circles" => "dark_circles",
			"dark_dotted" => "dark_dotted",
			"dark_dotted2" => "dark_dotted2",
			"dark_exa" => "dark_exa",
			"dark_fish_skin" => "dark_fish_skin",
			"dark_geometric" => "dark_geometric",
			"dark_leather" => "dark_leather",
			"dark_matter" => "dark_matter",
			"dark_mosaic" => "dark_mosaic",
			"dark_stripes" => "dark_stripes",
			"dark_wall" => "dark_wall",
			"dark_wood" => "dark_wood",
			"darkdenim3" => "darkdenim3",
			"darth_stripe" => "darth_stripe",
			"debut_dark" => "debut_dark",
			"debut_light" => "debut_light",
			"denim" => "denim",
			"diagmonds" => "diagmonds",
			"diagonal-noise" => "diagonal-noise",
			"diagonal_striped_brick" => "diagonal_striped_brick",
			"diagonal_waves" => "diagonal_waves",
			"diagonales_decalees" => "diagonales_decalees",
			"diamond_upholstery" => "diamond_upholstery",
			"diamonds" => "diamonds",
			"dimension" => "dimension",
			"dirty_old_shirt" => "dirty_old_shirt",
			"double_lined" => "double_lined",
			"dust" => "dust",
			"dvsup" => "dvsup",
			"ecailles" => "ecailles",
			"egg_shell" => "egg_shell",
			"elastoplast" => "elastoplast",
			"elegant_grid" => "elegant_grid",
			"embossed_paper" => "embossed_paper",
			"escheresque" => "escheresque",
			"escheresque_ste" => "escheresque_ste",
			"exclusive_paper" => "exclusive_paper",
			"extra_clean_paper" => "extra_clean_paper",
			"fabric_1" => "fabric_1",
			"fabric_of_squares_gray" => "fabric_of_squares_gray",
			"fabric_plaid" => "fabric_plaid",
			"fake_brick" => "fake_brick",
			"fake_luxury" => "fake_luxury",
			"fancy_deboss" => "fancy_deboss",
			"farmer" => "farmer",
			"felt" => "felt",
			"first_aid_kit" => "first_aid_kit",
			"flowers" => "flowers",
			"flowertrail" => "flowertrail",
			"foggy_birds" => "foggy_birds",
			"foil" => "foil",
			"frenchstucco" => "frenchstucco",
			"furley_bg" => "furley_bg",
			"geometry" => "geometry",
			"gold_scale" => "gold_scale",
			"gplaypattern" => "gplaypattern",
			"gradient_squares" => "gradient_squares",
			"graphy" => "graphy",
			"gray_jean" => "gray_jean",
			"gray_sand" => "gray_sand",
			"green-fibers" => "green-fibers",
			"green_dust_scratch" => "green_dust_scratch",
			"green_gobbler" => "green_gobbler",
			"grey" => "grey",
			"grey_sandbag" => "grey_sandbag",
			"grey_wash_wall" => "grey_wash_wall",
			"greyfloral" => "greyfloral",
			"greyzz" => "greyzz",
			"grid" => "grid",
			"grid_noise" => "grid_noise",
			"gridme" => "gridme",
			"grilled" => "grilled",
			"groovepaper" => "groovepaper",
			"grunge_wall" => "grunge_wall",
			"gun_metal" => "gun_metal",
			"handmadepaper" => "handmadepaper",
			"hexabump" => "hexabump",
			"hexellence" => "hexellence",
			"hixs_pattern_evolution" => "hixs_pattern_evolution",
			"hoffman" => "hoffman",
			"honey_im_subtle" => "honey_im_subtle",
			"husk" => "husk",
			"ice_age" => "ice_age",
			"inflicted" => "inflicted",
			"irongrip" => "irongrip",
			"kindajean" => "kindajean",
			"knitted-netting" => "knitted-netting",
			"knitting250px" => "knitting250px",
			"kuji" => "kuji",
			"large_leather" => "large_leather",
			"leather_1" => "leather_1",
			"lghtmesh" => "lghtmesh",
			"light_alu" => "light_alu",
			"light_checkered_tiles" => "light_checkered_tiles",
			"light_grey_floral_motif" => "light_grey_floral_motif",
			"light_honeycomb" => "light_honeycomb",
			"light_noise_diagonal" => "light_noise_diagonal",
			"light_toast" => "light_toast",
			"light_wool" => "light_wool",
			"lightpaperfibers" => "lightpaperfibers",
			"lil_fiber" => "lil_fiber",
			"lined_paper" => "lined_paper",
			"linedpaper" => "linedpaper",
			"linen" => "linen",
			"little_pluses" => "little_pluses",
			"little_triangles" => "little_triangles",
			"littleknobs" => "littleknobs",
			"low_contrast_linen" => "low_contrast_linen",
			"lyonnette" => "lyonnette",
			"merely_cubed" => "merely_cubed",
			"micro_carbon" => "micro_carbon",
			"mirrored_squares" => "mirrored_squares",
			"mochaGrunge" => "mochaGrunge",
			"mooning" => "mooning",
			"moulin" => "moulin",
			"nami" => "nami",
			"nasty_fabric" => "nasty_fabric",
			"natural_paper" => "natural_paper",
			"navy_blue" => "navy_blue",
			"nistri" => "nistri",
			"noise_lines" => "noise_lines",
			"noise_pattern_with_crosslines" => "noise_pattern_with_crosslines",
			"noisy" => "noisy",
			"noisy_grid" => "noisy_grid",
			"noisy_net" => "noisy_net",
			"norwegian_rose" => "norwegian_rose",
			"office" => "office",
			"old_mathematics" => "old_mathematics",
			"old_wall" => "old_wall",
			"otis_redding" => "otis_redding",
			"outlets" => "outlets",
			"p1" => "p1",
			"p2" => "p2",
			"p4" => "p4",
			"p5" => "p5",
			"p6" => "p6",
			"padded" => "padded",
			"paper" => "paper",
			"paper_1" => "paper_1",
			"paper_2" => "paper_2",
			"paper_3" => "paper_3",
			"paper_fibers" => "paper_fibers",
			"paven" => "paven",
			"perforated_white_leather" => "perforated_white_leather",
			"pineapplecut" => "pineapplecut",
			"pinstripe" => "pinstripe",
			"pinstriped_suit" => "pinstriped_suit",
			"pixel_weave" => "pixel_weave",
			"plaid" => "plaid",
			"polaroid" => "polaroid",
			"polonez_car" => "polonez_car",
			"polyester_lite" => "polyester_lite",
			"pool_table" => "pool_table",
			"project_papper" => "project_papper",
			"ps_neutral" => "ps_neutral",
			"psychedelic_pattern" => "psychedelic_pattern",
			"purty_wood" => "purty_wood",
			"pw_maze_black" => "pw_maze_black",
			"pw_maze_white" => "pw_maze_white",
			"pw_pattern" => "pw_pattern",
			"px_by_Gre3g" => "px_by_Gre3g",
			"pyramid" => "pyramid",
			"quilt" => "quilt",
			"random_grey_variations" => "random_grey_variations",
			"ravenna" => "ravenna",
			"real_cf" => "real_cf",
			"rebel" => "rebel",
			"redox_01" => "redox_01",
			"redox_02" => "redox_02",
			"reticular_tissue" => "reticular_tissue",
			"retina_wood" => "retina_wood",
			"retro_intro" => "retro_intro",
			"ricepaper" => "ricepaper",
			"ricepaper2" => "ricepaper2",
			"rip_jobs" => "rip_jobs",
			"robots" => "robots",
			"rockywall" => "rockywall",
			"rough_diagonal" => "rough_diagonal",
			"roughcloth" => "roughcloth",
			"rubber_grip" => "rubber_grip",
			"satinweave" => "satinweave",
			"scribble_light" => "scribble_light",
			"shattered" => "shattered",
			"shinecaro" => "shinecaro",
			"shinedotted" => "shinedotted",
			"shl" => "shl",
			"silver_scales" => "silver_scales",
			"simple_dashed" => "simple_dashed",
			"skelatal_weave" => "skelatal_weave",
			"skewed_print" => "skewed_print",
			"skin_side_up" => "skin_side_up",
			"slash_it" => "slash_it",
			"small-crackle-bright" => "small-crackle-bright",
			"small_tiles" => "small_tiles",
			"smooth_wall" => "smooth_wall",
			"sneaker_mesh_fabric" => "sneaker_mesh_fabric",
			"snow" => "snow",
			"soft_circle_scales" => "soft_circle_scales",
			"soft_kill" => "soft_kill",
			"soft_pad" => "soft_pad",
			"soft_wallpaper" => "soft_wallpaper",
			"solid" => "solid",
			"squairy_light" => "squairy_light",
			"square_bg" => "square_bg",
			"squares" => "squares",
			"stacked_circles" => "stacked_circles",
			"starring" => "starring",
			"stitched_wool" => "stitched_wool",
			"strange_bullseyes" => "strange_bullseyes",
			"straws" => "straws",
			"stressed_linen" => "stressed_linen",
			"striped_lens" => "striped_lens",
			"struckaxiom" => "struckaxiom",
			"stucco" => "stucco",
			"subtle_carbon" => "subtle_carbon",
			"subtle_dots" => "subtle_dots",
			"subtle_freckles" => "subtle_freckles",
			"subtle_grunge" => "subtle_grunge",
			"subtle_orange_emboss" => "subtle_orange_emboss",
			"subtle_stripes" => "subtle_stripes",
			"subtle_surface" => "subtle_surface",
			"subtle_white_feathers" => "subtle_white_feathers",
			"subtle_zebra_3d" => "subtle_zebra_3d",
			"subtlenet2" => "subtlenet2",
			"swirl" => "swirl",
			"tactile_noise" => "tactile_noise",
			"tapestry_pattern" => "tapestry_pattern",
			"tasky_pattern" => "tasky_pattern",
			"tex2res1" => "tex2res1",
			"tex2res2" => "tex2res2",
			"tex2res3" => "tex2res3",
			"tex2res4" => "tex2res4",
			"tex2res5" => "tex2res5",
			"textured_paper" => "textured_paper",
			"textured_stripes" => "textured_stripes",
			"texturetastic_gray" => "texturetastic_gray",
			"ticks" => "ticks",
			"tileable_wood_texture" => "tileable_wood_texture",
			"tiny_grid" => "tiny_grid",
			"triangles" => "triangles",
			"triangles_pattern" => "triangles_pattern",
			"triangular" => "triangular",
			"tweed" => "tweed",
			"twinkle_twinkle" => "twinkle_twinkle",
			"txture" => "txture",
			"type" => "type",
			"use_your_illusion" => "use_your_illusion",
			"vaio_hard_edge" => "vaio_hard_edge",
			"vertical_cloth" => "vertical_cloth",
			"vichy" => "vichy",
			"vintage_speckles" => "vintage_speckles",
			"wall4" => "wall4",
			"washi" => "washi",
			"wavecut" => "wavecut",
			"wavegrid" => "wavegrid",
			"weave" => "weave",
			"white_bed_sheet" => "white_bed_sheet",
			"white_brick_wall" => "white_brick_wall",
			"white_carbon" => "white_carbon",
			"white_carbonfiber" => "white_carbonfiber",
			"white_leather" => "white_leather",
			"white_paperboard" => "white_paperboard",
			"white_plaster" => "white_plaster",
			"white_sand" => "white_sand",
			"white_texture" => "white_texture",
			"white_tiles" => "white_tiles",
			"white_wall" => "white_wall",
			"white_wall2" => "white_wall2",
			"white_wall_hash" => "white_wall_hash",
			"white_wave" => "white_wave",
			"whitediamond" => "whitediamond",
			"whitey" => "whitey",
			"wide_rectangles" => "wide_rectangles",
			"wild_oliva" => "wild_oliva",
			"witewall_3" => "witewall_3",
			"wood_1" => "wood_1",
			"wood_pattern" => "wood_pattern",
			"worn_dots" => "worn_dots",
			"woven" => "woven",
			"xv" => "xv",
			"zigzag" => "zigzag"
		);


		
		
		 $google_fonts = array(
            "0" => "Select Font",
            "ABeeZee" => "ABeeZee",
            "Abel" => "Abel",
            "Abril Fatface" => "Abril Fatface",
            "Aclonica" => "Aclonica",
            "Acme" => "Acme",
            "Actor" => "Actor",
            "Adamina" => "Adamina",
            "Advent Pro" => "Advent Pro",
            "Aguafina Script" => "Aguafina Script",
            "Akronim" => "Akronim",
            "Aladin" => "Aladin",
            "Aldrich" => "Aldrich",
            "Alef" => "Alef",
            "Alegreya" => "Alegreya",
            "Alegreya SC" => "Alegreya SC",
            "Alex Brush" => "Alex Brush",
            "Alfa Slab One" => "Alfa Slab One",
            "Alice" => "Alice",
            "Alike" => "Alike",
            "Alike Angular" => "Alike Angular",
            "Allan" => "Allan",
            "Allerta" => "Allerta",
            "Allerta Stencil" => "Allerta Stencil",
            "Allura" => "Allura",
            "Almendra" => "Almendra",
            "Almendra Display" => "Almendra Display",
            "Almendra SC" => "Almendra SC",
            "Amarante" => "Amarante",
            "Amaranth" => "Amaranth",
            "Amatic SC" => "Amatic SC",
            "Amethysta" => "Amethysta",
            "Anaheim" => "Anaheim",
            "Andada" => "Andada",
            "Andika" => "Andika",
            "Angkor" => "Angkor",
            "Annie Use Your Telescope" => "Annie Use Your Telescope",
            "Anonymous Pro" => "Anonymous Pro",
            "Antic" => "Antic",
            "Antic Didone" => "Antic Didone",
            "Antic Slab" => "Antic Slab",
            "Anton" => "Anton",
            "Arapey" => "Arapey",
            "Arbutus" => "Arbutus",
            "Arbutus Slab" => "Arbutus Slab",
            "Architects Daughter" => "Architects Daughter",
            "Archivo Black" => "Archivo Black",
            "Archivo Narrow" => "Archivo Narrow",
            "Arimo" => "Arimo",
            "Arizonia" => "Arizonia",
            "Armata" => "Armata",
            "Artifika" => "Artifika",
            "Arvo" => "Arvo",
            "Asap" => "Asap",
            "Asset" => "Asset",
            "Astloch" => "Astloch",
            "Asul" => "Asul",
            "Atomic Age" => "Atomic Age",
            "Aubrey" => "Aubrey",
            "Audiowide" => "Audiowide",
            "Autour One" => "Autour One",
            "Average" => "Average",
            "Average Sans" => "Average Sans",
            "Averia Gruesa Libre" => "Averia Gruesa Libre",
            "Averia Libre" => "Averia Libre",
            "Averia Sans Libre" => "Averia Sans Libre",
            "Averia Serif Libre" => "Averia Serif Libre",
            "Bad Script" => "Bad Script",
            "Balthazar" => "Balthazar",
            "Bangers" => "Bangers",
            "Basic" => "Basic",
            "Battambang" => "Battambang",
            "Baumans" => "Baumans",
            "Bayon" => "Bayon",
            "Belgrano" => "Belgrano",
            "Belleza" => "Belleza",
            "BenchNine" => "BenchNine",
            "Bentham" => "Bentham",
            "Berkshire Swash" => "Berkshire Swash",
            "Bevan" => "Bevan",
            "Bigelow Rules" => "Bigelow Rules",
            "Bigshot One" => "Bigshot One",
            "Bilbo" => "Bilbo",
            "Bilbo Swash Caps" => "Bilbo Swash Caps",
            "Bitter" => "Bitter",
            "Black Ops One" => "Black Ops One",
            "Bokor" => "Bokor",
            "Bonbon" => "Bonbon",
            "Boogaloo" => "Boogaloo",
            "Bowlby One" => "Bowlby One",
            "Bowlby One SC" => "Bowlby One SC",
            "Brawler" => "Brawler",
            "Bree Serif" => "Bree Serif",
            "Bubblegum Sans" => "Bubblegum Sans",
            "Bubbler One" => "Bubbler One",
            "Buda" => "Buda",
            "Buenard" => "Buenard",
            "Butcherman" => "Butcherman",
            "Butterfly Kids" => "Butterfly Kids",
            "Cabin" => "Cabin",
            "Cabin Condensed" => "Cabin Condensed",
            "Cabin Sketch" => "Cabin Sketch",
            "Caesar Dressing" => "Caesar Dressing",
            "Cagliostro" => "Cagliostro",
            "Calligraffitti" => "Calligraffitti",
            "Cambo" => "Cambo",
            "Candal" => "Candal",
            "Cantarell" => "Cantarell",
            "Cantata One" => "Cantata One",
            "Cantora One" => "Cantora One",
            "Capriola" => "Capriola",
            "Cardo" => "Cardo",
            "Carme" => "Carme",
            "Carrois Gothic" => "Carrois Gothic",
            "Carrois Gothic SC" => "Carrois Gothic SC",
            "Carter One" => "Carter One",
            "Caudex" => "Caudex",
            "Cedarville Cursive" => "Cedarville Cursive",
            "Ceviche One" => "Ceviche One",
            "Changa One" => "Changa One",
            "Chango" => "Chango",
            "Chau Philomene One" => "Chau Philomene One",
            "Chela One" => "Chela One",
            "Chelsea Market" => "Chelsea Market",
            "Chenla" => "Chenla",
            "Cherry Cream Soda" => "Cherry Cream Soda",
            "Cherry Swash" => "Cherry Swash",
            "Chewy" => "Chewy",
            "Chicle" => "Chicle",
            "Chivo" => "Chivo",
            "Cinzel" => "Cinzel",
            "Cinzel Decorative" => "Cinzel Decorative",
            "Clicker Script" => "Clicker Script",
            "Coda" => "Coda",
            "Coda Caption" => "Coda Caption",
            "Codystar" => "Codystar",
            "Combo" => "Combo",
            "Comfortaa" => "Comfortaa",
            "Coming Soon" => "Coming Soon",
            "Concert One" => "Concert One",
            "Condiment" => "Condiment",
            "Content" => "Content",
            "Contrail One" => "Contrail One",
            "Convergence" => "Convergence",
            "Cookie" => "Cookie",
            "Copse" => "Copse",
            "Corben" => "Corben",
            "Courgette" => "Courgette",
            "Cousine" => "Cousine",
            "Coustard" => "Coustard",
            "Covered By Your Grace" => "Covered By Your Grace",
            "Crafty Girls" => "Crafty Girls",
            "Creepster" => "Creepster",
            "Crete Round" => "Crete Round",
            "Crimson Text" => "Crimson Text",
            "Croissant One" => "Croissant One",
            "Crushed" => "Crushed",
            "Cuprum" => "Cuprum",
            "Cutive" => "Cutive",
            "Cutive Mono" => "Cutive Mono",
            "Damion" => "Damion",
            "Dancing Script" => "Dancing Script",
            "Dangrek" => "Dangrek",
            "Dawning of a New Day" => "Dawning of a New Day",
            "Days One" => "Days One",
            "Delius" => "Delius",
            "Delius Swash Caps" => "Delius Swash Caps",
            "Delius Unicase" => "Delius Unicase",
            "Della Respira" => "Della Respira",
            "Denk One" => "Denk One",
            "Devonshire" => "Devonshire",
            "Didact Gothic" => "Didact Gothic",
            "Diplomata" => "Diplomata",
            "Diplomata SC" => "Diplomata SC",
            "Domine" => "Domine",
            "Donegal One" => "Donegal One",
            "Doppio One" => "Doppio One",
            "Dorsa" => "Dorsa",
            "Dosis" => "Dosis",
            "Dr Sugiyama" => "Dr Sugiyama",
            "Droid Sans" => "Droid Sans",
            "Droid Sans Mono" => "Droid Sans Mono",
            "Droid Serif" => "Droid Serif",
            "Duru Sans" => "Duru Sans",
            "Dynalight" => "Dynalight",
            "EB Garamond" => "EB Garamond",
            "Eagle Lake" => "Eagle Lake",
            "Eater" => "Eater",
            "Economica" => "Economica",
            "Electrolize" => "Electrolize",
            "Elsie" => "Elsie",
            "Elsie Swash Caps" => "Elsie Swash Caps",
            "Emblema One" => "Emblema One",
            "Emilys Candy" => "Emilys Candy",
            "Engagement" => "Engagement",
            "Englebert" => "Englebert",
            "Enriqueta" => "Enriqueta",
            "Erica One" => "Erica One",
            "Esteban" => "Esteban",
            "Euphoria Script" => "Euphoria Script",
            "Ewert" => "Ewert",
            "Exo" => "Exo",
            "Expletus Sans" => "Expletus Sans",
            "Fanwood Text" => "Fanwood Text",
            "Fascinate" => "Fascinate",
            "Fascinate Inline" => "Fascinate Inline",
            "Faster One" => "Faster One",
            "Fasthand" => "Fasthand",
            "Fauna One" => "Fauna One",
            "Federant" => "Federant",
            "Federo" => "Federo",
            "Felipa" => "Felipa",
            "Fenix" => "Fenix",
            "Finger Paint" => "Finger Paint",
            "Fjalla One" => "Fjalla One",
            "Fjord One" => "Fjord One",
            "Flamenco" => "Flamenco",
            "Flavors" => "Flavors",
            "Fondamento" => "Fondamento",
            "Fontdiner Swanky" => "Fontdiner Swanky",
            "Forum" => "Forum",
            "Francois One" => "Francois One",
            "Freckle Face" => "Freckle Face",
            "Fredericka the Great" => "Fredericka the Great",
            "Fredoka One" => "Fredoka One",
            "Freehand" => "Freehand",
            "Fresca" => "Fresca",
            "Frijole" => "Frijole",
            "Fruktur" => "Fruktur",
            "Fugaz One" => "Fugaz One",
            "GFS Didot" => "GFS Didot",
            "GFS Neohellenic" => "GFS Neohellenic",
            "Gabriela" => "Gabriela",
            "Gafata" => "Gafata",
            "Galdeano" => "Galdeano",
            "Galindo" => "Galindo",
            "Gentium Basic" => "Gentium Basic",
            "Gentium Book Basic" => "Gentium Book Basic",
            "Geo" => "Geo",
            "Geostar" => "Geostar",
            "Geostar Fill" => "Geostar Fill",
            "Germania One" => "Germania One",
            "Gilda Display" => "Gilda Display",
            "Give You Glory" => "Give You Glory",
            "Glass Antiqua" => "Glass Antiqua",
            "Glegoo" => "Glegoo",
            "Gloria Hallelujah" => "Gloria Hallelujah",
            "Goblin One" => "Goblin One",
            "Gochi Hand" => "Gochi Hand",
            "Gorditas" => "Gorditas",
            "Goudy Bookletter 1911" => "Goudy Bookletter 1911",
            "Graduate" => "Graduate",
            "Grand Hotel" => "Grand Hotel",
            "Gravitas One" => "Gravitas One",
            "Great Vibes" => "Great Vibes",
            "Griffy" => "Griffy",
            "Gruppo" => "Gruppo",
            "Gudea" => "Gudea",
            "Habibi" => "Habibi",
            "Hammersmith One" => "Hammersmith One",
            "Hanalei" => "Hanalei",
            "Hanalei Fill" => "Hanalei Fill",
            "Handlee" => "Handlee",
            "Hanuman" => "Hanuman",
            "Happy Monkey" => "Happy Monkey",
            "Headland One" => "Headland One",
            "Henny Penny" => "Henny Penny",
            "Herr Von Muellerhoff" => "Herr Von Muellerhoff",
            "Holtwood One SC" => "Holtwood One SC",
            "Homemade Apple" => "Homemade Apple",
            "Homenaje" => "Homenaje",
            "IM Fell DW Pica" => "IM Fell DW Pica",
            "IM Fell DW Pica SC" => "IM Fell DW Pica SC",
            "IM Fell Double Pica" => "IM Fell Double Pica",
            "IM Fell Double Pica SC" => "IM Fell Double Pica SC",
            "IM Fell English" => "IM Fell English",
            "IM Fell English SC" => "IM Fell English SC",
            "IM Fell French Canon" => "IM Fell French Canon",
            "IM Fell French Canon SC" => "IM Fell French Canon SC",
            "IM Fell Great Primer" => "IM Fell Great Primer",
            "IM Fell Great Primer SC" => "IM Fell Great Primer SC",
            "Iceberg" => "Iceberg",
            "Iceland" => "Iceland",
            "Imprima" => "Imprima",
            "Inconsolata" => "Inconsolata",
            "Inder" => "Inder",
            "Indie Flower" => "Indie Flower",
            "Inika" => "Inika",
            "Irish Grover" => "Irish Grover",
            "Istok Web" => "Istok Web",
            "Italiana" => "Italiana",
            "Italianno" => "Italianno",
            "Jacques Francois" => "Jacques Francois",
            "Jacques Francois Shadow" => "Jacques Francois Shadow",
            "Jim Nightshade" => "Jim Nightshade",
            "Jockey One" => "Jockey One",
            "Jolly Lodger" => "Jolly Lodger",
            "Josefin Sans" => "Josefin Sans",
            "Josefin Slab" => "Josefin Slab",
            "Joti One" => "Joti One",
            "Judson" => "Judson",
            "Julee" => "Julee",
            "Julius Sans One" => "Julius Sans One",
            "Junge" => "Junge",
            "Jura" => "Jura",
            "Just Another Hand" => "Just Another Hand",
            "Just Me Again Down Here" => "Just Me Again Down Here",
            "Kameron" => "Kameron",
            "Karla" => "Karla",
            "Kaushan Script" => "Kaushan Script",
            "Kavoon" => "Kavoon",
            "Keania One" => "Keania One",
            "Kelly Slab" => "Kelly Slab",
            "Kenia" => "Kenia",
            "Khmer" => "Khmer",
            "Kite One" => "Kite One",
            "Knewave" => "Knewave",
            "Kotta One" => "Kotta One",
            "Koulen" => "Koulen",
            "Kranky" => "Kranky",
            "Kreon" => "Kreon",
            "Kristi" => "Kristi",
            "Krona One" => "Krona One",
            "La Belle Aurore" => "La Belle Aurore",
            "Lancelot" => "Lancelot",
            "Lato" => "Lato",
            "League Script" => "League Script",
            "Leckerli One" => "Leckerli One",
            "Ledger" => "Ledger",
            "Lekton" => "Lekton",
            "Lemon" => "Lemon",
            "Libre Baskerville" => "Libre Baskerville",
            "Life Savers" => "Life Savers",
            "Lilita One" => "Lilita One",
            "Lily Script One" => "Lily Script One",
            "Limelight" => "Limelight",
            "Linden Hill" => "Linden Hill",
            "Lobster" => "Lobster",
            "Lobster Two" => "Lobster Two",
            "Londrina Outline" => "Londrina Outline",
            "Londrina Shadow" => "Londrina Shadow",
            "Londrina Sketch" => "Londrina Sketch",
            "Londrina Solid" => "Londrina Solid",
            "Lora" => "Lora",
            "Love Ya Like A Sister" => "Love Ya Like A Sister",
            "Loved by the King" => "Loved by the King",
            "Lovers Quarrel" => "Lovers Quarrel",
            "Luckiest Guy" => "Luckiest Guy",
            "Lusitana" => "Lusitana",
            "Lustria" => "Lustria",
            "Macondo" => "Macondo",
            "Macondo Swash Caps" => "Macondo Swash Caps",
            "Magra" => "Magra",
            "Maiden Orange" => "Maiden Orange",
            "Mako" => "Mako",
            "Marcellus" => "Marcellus",
            "Marcellus SC" => "Marcellus SC",
            "Marck Script" => "Marck Script",
            "Margarine" => "Margarine",
            "Marko One" => "Marko One",
            "Marmelad" => "Marmelad",
            "Marvel" => "Marvel",
            "Mate" => "Mate",
            "Mate SC" => "Mate SC",
            "Maven Pro" => "Maven Pro",
            "McLaren" => "McLaren",
            "Meddon" => "Meddon",
            "MedievalSharp" => "MedievalSharp",
            "Medula One" => "Medula One",
            "Megrim" => "Megrim",
            "Meie Script" => "Meie Script",
            "Merienda" => "Merienda",
            "Merienda One" => "Merienda One",
            "Merriweather" => "Merriweather",
            "Merriweather Sans" => "Merriweather Sans",
            "Metal" => "Metal",
            "Metal Mania" => "Metal Mania",
            "Metamorphous" => "Metamorphous",
            "Metrophobic" => "Metrophobic",
            "Michroma" => "Michroma",
            "Milonga" => "Milonga",
            "Miltonian" => "Miltonian",
            "Miltonian Tattoo" => "Miltonian Tattoo",
            "Miniver" => "Miniver",
            "Miss Fajardose" => "Miss Fajardose",
            "Modern Antiqua" => "Modern Antiqua",
            "Molengo" => "Molengo",
            "Molle" => "Molle",
            "Monda" => "Monda",
            "Monofett" => "Monofett",
            "Monoton" => "Monoton",
            "Monsieur La Doulaise" => "Monsieur La Doulaise",
            "Montaga" => "Montaga",
            "Montez" => "Montez",
            "Montserrat" => "Montserrat",
            "Montserrat Alternates" => "Montserrat Alternates",
            "Montserrat Subrayada" => "Montserrat Subrayada",
            "Moul" => "Moul",
            "Moulpali" => "Moulpali",
            "Mountains of Christmas" => "Mountains of Christmas",
            "Mouse Memoirs" => "Mouse Memoirs",
            "Mr Bedfort" => "Mr Bedfort",
            "Mr Dafoe" => "Mr Dafoe",
            "Mr De Haviland" => "Mr De Haviland",
            "Mrs Saint Delafield" => "Mrs Saint Delafield",
            "Mrs Sheppards" => "Mrs Sheppards",
            "Muli" => "Muli",
            "Mystery Quest" => "Mystery Quest",
            "Neucha" => "Neucha",
            "Neuton" => "Neuton",
            "New Rocker" => "New Rocker",
            "News Cycle" => "News Cycle",
            "Niconne" => "Niconne",
            "Nixie One" => "Nixie One",
            "Nobile" => "Nobile",
            "Nokora" => "Nokora",
            "Norican" => "Norican",
            "Nosifer" => "Nosifer",
            "Nothing You Could Do" => "Nothing You Could Do",
            "Noticia Text" => "Noticia Text",
            "Noto Sans" => "Noto Sans",
            "Noto Serif" => "Noto Serif",
            "Nova Cut" => "Nova Cut",
            "Nova Flat" => "Nova Flat",
            "Nova Mono" => "Nova Mono",
            "Nova Oval" => "Nova Oval",
            "Nova Round" => "Nova Round",
            "Nova Script" => "Nova Script",
            "Nova Slim" => "Nova Slim",
            "Nova Square" => "Nova Square",
            "Numans" => "Numans",
            "Nunito" => "Nunito",
            "Odor Mean Chey" => "Odor Mean Chey",
            "Offside" => "Offside",
            "Old Standard TT" => "Old Standard TT",
            "Oldenburg" => "Oldenburg",
            "Oleo Script" => "Oleo Script",
            "Oleo Script Swash Caps" => "Oleo Script Swash Caps",
            "Open Sans" => "Open Sans",
            "Open Sans Condensed" => "Open Sans Condensed",
            "Oranienbaum" => "Oranienbaum",
            "Orbitron" => "Orbitron",
            "Oregano" => "Oregano",
            "Orienta" => "Orienta",
            "Original Surfer" => "Original Surfer",
            "Oswald" => "Oswald",
            "Over the Rainbow" => "Over the Rainbow",
            "Overlock" => "Overlock",
            "Overlock SC" => "Overlock SC",
            "Ovo" => "Ovo",
            "Oxygen" => "Oxygen",
            "Oxygen Mono" => "Oxygen Mono",
            "PT Mono" => "PT Mono",
            "PT Sans" => "PT Sans",
            "PT Sans Caption" => "PT Sans Caption",
            "PT Sans Narrow" => "PT Sans Narrow",
            "PT Serif" => "PT Serif",
            "PT Serif Caption" => "PT Serif Caption",
            "Pacifico" => "Pacifico",
            "Paprika" => "Paprika",
            "Parisienne" => "Parisienne",
            "Passero One" => "Passero One",
            "Passion One" => "Passion One",
            "Pathway Gothic One" => "Pathway Gothic One",
            "Patrick Hand" => "Patrick Hand",
            "Patrick Hand SC" => "Patrick Hand SC",
            "Patua One" => "Patua One",
            "Paytone One" => "Paytone One",
            "Peralta" => "Peralta",
            "Permanent Marker" => "Permanent Marker",
            "Petit Formal Script" => "Petit Formal Script",
            "Petrona" => "Petrona",
            "Philosopher" => "Philosopher",
            "Piedra" => "Piedra",
            "Pinyon Script" => "Pinyon Script",
            "Pirata One" => "Pirata One",
            "Plaster" => "Plaster",
            "Play" => "Play",
            "Playball" => "Playball",
            "Playfair Display" => "Playfair Display",
            "Playfair Display SC" => "Playfair Display SC",
            "Podkova" => "Podkova",
            "Poiret One" => "Poiret One",
            "Poller One" => "Poller One",
            "Poly" => "Poly",
            "Pompiere" => "Pompiere",
            "Pontano Sans" => "Pontano Sans",
            "Port Lligat Sans" => "Port Lligat Sans",
            "Port Lligat Slab" => "Port Lligat Slab",
            "Prata" => "Prata",
            "Preahvihear" => "Preahvihear",
            "Press Start 2P" => "Press Start 2P",
            "Princess Sofia" => "Princess Sofia",
            "Prociono" => "Prociono",
            "Prosto One" => "Prosto One",
            "Puritan" => "Puritan",
            "Purple Purse" => "Purple Purse",
            "Quando" => "Quando",
            "Quantico" => "Quantico",
            "Quattrocento" => "Quattrocento",
            "Quattrocento Sans" => "Quattrocento Sans",
            "Questrial" => "Questrial",
            "Quicksand" => "Quicksand",
            "Quintessential" => "Quintessential",
            "Qwigley" => "Qwigley",
            "Racing Sans One" => "Racing Sans One",
            "Radley" => "Radley",
            "Raleway" => "Raleway",
            "Raleway Dots" => "Raleway Dots",
            "Rambla" => "Rambla",
            "Rammetto One" => "Rammetto One",
            "Ranchers" => "Ranchers",
            "Rancho" => "Rancho",
            "Rationale" => "Rationale",
            "Redressed" => "Redressed",
            "Reenie Beanie" => "Reenie Beanie",
            "Revalia" => "Revalia",
            "Ribeye" => "Ribeye",
            "Ribeye Marrow" => "Ribeye Marrow",
            "Righteous" => "Righteous",
            "Risque" => "Risque",
            "Roboto" => "Roboto",
            "Roboto Condensed" => "Roboto Condensed",
            "Roboto Slab" => "Roboto Slab",
            "Rochester" => "Rochester",
            "Rock Salt" => "Rock Salt",
            "Rokkitt" => "Rokkitt",
            "Romanesco" => "Romanesco",
            "Ropa Sans" => "Ropa Sans",
            "Rosario" => "Rosario",
            "Rosarivo" => "Rosarivo",
            "Rouge Script" => "Rouge Script",
            "Ruda" => "Ruda",
            "Rufina" => "Rufina",
            "Ruge Boogie" => "Ruge Boogie",
            "Ruluko" => "Ruluko",
            "Rum Raisin" => "Rum Raisin",
            "Ruslan Display" => "Ruslan Display",
            "Russo One" => "Russo One",
            "Ruthie" => "Ruthie",
            "Rye" => "Rye",
            "Sacramento" => "Sacramento",
            "Sail" => "Sail",
            "Salsa" => "Salsa",
            "Sanchez" => "Sanchez",
            "Sancreek" => "Sancreek",
            "Sansita One" => "Sansita One",
            "Sarina" => "Sarina",
            "Satisfy" => "Satisfy",
            "Scada" => "Scada",
            "Schoolbell" => "Schoolbell",
            "Seaweed Script" => "Seaweed Script",
            "Sevillana" => "Sevillana",
            "Seymour One" => "Seymour One",
            "Shadows Into Light" => "Shadows Into Light",
            "Shadows Into Light Two" => "Shadows Into Light Two",
            "Shanti" => "Shanti",
            "Share" => "Share",
            "Share Tech" => "Share Tech",
            "Share Tech Mono" => "Share Tech Mono",
            "Shojumaru" => "Shojumaru",
            "Short Stack" => "Short Stack",
            "Siemreap" => "Siemreap",
            "Sigmar One" => "Sigmar One",
            "Signika" => "Signika",
            "Signika Negative" => "Signika Negative",
            "Simonetta" => "Simonetta",
            "Sintony" => "Sintony",
            "Sirin Stencil" => "Sirin Stencil",
            "Six Caps" => "Six Caps",
            "Skranji" => "Skranji",
            "Slackey" => "Slackey",
            "Smokum" => "Smokum",
            "Smythe" => "Smythe",
            "Sniglet" => "Sniglet",
            "Snippet" => "Snippet",
            "Snowburst One" => "Snowburst One",
            "Sofadi One" => "Sofadi One",
            "Sofia" => "Sofia",
            "Sonsie One" => "Sonsie One",
            "Sorts Mill Goudy" => "Sorts Mill Goudy",
            "Source Code Pro" => "Source Code Pro",
            "Source Sans Pro" => "Source Sans Pro",
            "Special Elite" => "Special Elite",
            "Spicy Rice" => "Spicy Rice",
            "Spinnaker" => "Spinnaker",
            "Spirax" => "Spirax",
            "Squada One" => "Squada One",
            "Stalemate" => "Stalemate",
            "Stalinist One" => "Stalinist One",
            "Stardos Stencil" => "Stardos Stencil",
            "Stint Ultra Condensed" => "Stint Ultra Condensed",
            "Stint Ultra Expanded" => "Stint Ultra Expanded",
            "Stoke" => "Stoke",
            "Strait" => "Strait",
            "Sue Ellen Francisco" => "Sue Ellen Francisco",
            "Sunshiney" => "Sunshiney",
            "Supermercado One" => "Supermercado One",
            "Suwannaphum" => "Suwannaphum",
            "Swanky and Moo Moo" => "Swanky and Moo Moo",
            "Syncopate" => "Syncopate",
            "Tangerine" => "Tangerine",
            "Taprom" => "Taprom",
            "Tauri" => "Tauri",
            "Telex" => "Telex",
            "Tenor Sans" => "Tenor Sans",
            "Text Me One" => "Text Me One",
            "The Girl Next Door" => "The Girl Next Door",
            "Tienne" => "Tienne",
            "Tinos" => "Tinos",
            "Titan One" => "Titan One",
            "Titillium Web" => "Titillium Web",
            "Trade Winds" => "Trade Winds",
            "Trocchi" => "Trocchi",
            "Trochut" => "Trochut",
            "Trykker" => "Trykker",
            "Tulpen One" => "Tulpen One",
            "Ubuntu" => "Ubuntu",
            "Ubuntu Condensed" => "Ubuntu Condensed",
            "Ubuntu Mono" => "Ubuntu Mono",
            "Ultra" => "Ultra",
            "Uncial Antiqua" => "Uncial Antiqua",
            "Underdog" => "Underdog",
            "Unica One" => "Unica One",
            "UnifrakturCook" => "UnifrakturCook",
            "UnifrakturMaguntia" => "UnifrakturMaguntia",
            "Unkempt" => "Unkempt",
            "Unlock" => "Unlock",
            "Unna" => "Unna",
            "VT323" => "VT323",
            "Vampiro One" => "Vampiro One",
            "Varela" => "Varela",
            "Varela Round" => "Varela Round",
            "Vast Shadow" => "Vast Shadow",
            "Vibur" => "Vibur",
            "Vidaloka" => "Vidaloka",
            "Viga" => "Viga",
            "Voces" => "Voces",
            "Volkhov" => "Volkhov",
            "Vollkorn" => "Vollkorn",
            "Voltaire" => "Voltaire",
            "Waiting for the Sunrise" => "Waiting for the Sunrise",
            "Wallpoet" => "Wallpoet",
            "Walter Turncoat" => "Walter Turncoat",
            "Warnes" => "Warnes",
            "Wellfleet" => "Wellfleet",
            "Wendy One" => "Wendy One",
            "Wire One" => "Wire One",
            "Yanone Kaffeesatz" => "Yanone Kaffeesatz",
            "Yellowtail" => "Yellowtail",
            "Yeseva One" => "Yeseva One",
            "Yesteryear" => "Yesteryear",
            "Zeyada" => "Zeyada"
        );
		
		$font_styles = array(
			"normal" => "Normal",
			"italic" => "Italic"
		);
		
		$font_weights = array(
			"300" => "300",
			"400" => "400",
			"700" => "700"
		);
		
		$fixed_normal = array(
			"fixed" => "fixed",
			"normal" => "normal"
		);
		
		$of_options_homepage_blocks = array
		( 
			"disabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"resume"		=> "Resume",
				"custom_content"=> "Custom Content"
			), 
			"enabled" => array (
				"placebo" 		=> "placebo", //REQUIRED!
				"recent_works"	=> "Recent Works",
				"recent_posts"	=> "Recent Posts",
			),
		);
		

		//More Options
		$uploads_arr 		= wp_upload_dir();
		$all_uploads_path 	= $uploads_arr['path'];
		$all_uploads 		= get_option('of_uploads');
		$body_repeat 		= array("no-repeat","repeat-x","repeat-y","repeat");
		$body_pos 			= array("top left","top center","top right","center left","center center","center right","bottom left","bottom center","bottom right");
		$body_attachment	= array("scroll","fixed");
		$body_size_cover	= array("Yes","No");
		$header_icon_colors	= array("white","black");
		

/*-----------------------------------------------------------------------------------*/
/* The Options Array */
/*-----------------------------------------------------------------------------------*/

// Set the Options Array
global $of_options;
$of_options = array();


// Header Settings
$of_options[] = array( 	"name" 		=> "Home Settings",
						"type" 		=> "heading"
				);
				
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Logo Options</h3>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Upload Logo",
						"desc" 		=> "Select A logo. default size: 175*80",
						"id" 		=> "chloe_logo",
						"type" 		=> "upload"
				);
				
$of_options[] = array( 	"name" 		=> "Logo Top Margin",
						"desc" 		=> "In pixels, ex: 10px, default: 140px. default for font logo: 160px",
						"id" 		=> "chloe_logo_top",
						"std" 		=> "160px",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "When Affix enable Logo Top Margin",
						"desc" 		=> "In pixels, ex: 100px, For Default, leave this field blank",
						"id" 		=> "affix_chloe_logo_top",
						"std" 		=> "",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Logo Bottom Margin",
						"desc" 		=> "In pixels, ex: 10px. default: 81px. default for font logo: 88px",
						"id" 		=> "chloe_logo_bottom",
						"std" 		=> "88px",
						"type" 		=> "text"
				);
				
				
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Logo Font Options (If you not upload a logo)</h3>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Logo Font Family",
						"desc" 		=> "Default 'Roboto'",
						"id" 		=> "logo_font_family",
						"std" 		=> "Roboto",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => "Your Logo",
										"size" => "28px"
						),
						"options" 	=> $google_fonts
				);
		
$of_options[] = array( 	"name" 		=> "Logo Color",
						"id" 		=> "logo_font_color",
						"std" 		=> "#FFF",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Logo Font Style",
						"id" 		=> "logo_font_style",
						"std" 		=> "normal",
						"type" 		=> "select",
						"options" 	=> $font_styles
);		

$of_options[] = array( 	"name" 		=> "Logo Font Weight",
						"id" 		=> "logo_font_weight",
						"desc"		=> "Note: All google fonts not support 300 weight",
						"std" 		=> "400",
						"type" 		=> "select",
						"options" 	=> $font_weights
);

$of_options[] = array( 	"name" 		=> "Logo Font Size",
						"desc" 		=> "in pixels, ex: 18px. Default 44px",
						"id" 		=> "logo_font_size",
						"std" 		=> "44px",
						"type" 		=> "text"
);

$of_options[] = array( 	"name" 		=> "Custom Logo Text",
						"desc" 		=> "For Default, leave this field blank",
						"id" 		=> "logo_text",
						"std" 		=> "",
						"type" 		=> "text"
);
				
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Favicon Options</h3>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Upload Favicon",
						"desc" 		=> "",
						"id" 		=> "chloe_favicon",
						"type" 		=> "upload"
				);
				
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Sidebar Fixed System</h3>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"std" 		=> "<p class='chloe_description' style='margin:0px;'>Sidebar fixed: always keep sidebar on screen, ie sidebar don't scrolling.<br />Sidebar normal: Normal sidebar, ie can scrolling.</p>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Blog Sidebar",
						"id" 		=> "blog_sidebar_fixed",
						"std" 		=> "fixed",
						"type" 		=> "select",
						"options" 	=> $fixed_normal
);

$of_options[] = array( 	"name" 		=> "Portfolio Sidebar",
						"id" 		=> "portfolio_sidebar_fixed",
						"std" 		=> "fixed",
						"type" 		=> "select",
						"options" 	=> $fixed_normal
);

$of_options[] = array( 	"name" 		=> "Resume Sidebar",
						"id" 		=> "resume_sidebar_fixed",
						"std" 		=> "fixed",
						"type" 		=> "select",
						"options" 	=> $fixed_normal
);

$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Header 2</h3>",
						"type" 		=> "info"
				);

$of_options[] = array(  "name" 		=> "You can activate header second Style",
						"id" 		=> "header_second_style",
						"std" 		=> 0,
						"type" 		=> "switch"
				);

				
// Header Settings
$of_options[] = array( 	"name" 		=> "Home Page",
						"type" 		=> "heading"
				);
				
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Home Page</h3>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Home page Layout Manager",
						"desc" 		=> "Organize how you want the layout to appear on the homepage.<br /><br />(Custom Content Field is below &#x25BC;)",
						"id" 		=> "homepage_blocks",
						"std" 		=> $of_options_homepage_blocks,
						"type" 		=> "sorter"
				);
				
$of_options[] = array( 	"name" 		=> "Home Page Custom Content",
						"desc"		=> 'You can use shortcodes.<br /><br /><b>Example;</b><br />[title size="normal"]This Example Title[/title] <br /><br />Please Take a look to documentation.',
						"id" 		=> "home_custom_content",
						"type" 		=> "textarea"
				);
				
$of_options[] = array( 	"name" 		=> "Max Recent Works",
						"desc" 		=> "maximum number of works you want to show on home page? default: 8 (Please enter only numbers.)",
						"id" 		=> "max_recent_works",
						"std" 		=> "8",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Max Recent Posts",
						"desc" 		=> "maximum number of Posts you want to show on home page? default: 6 (Please enter only numbers.)",
						"id" 		=> "max_recent_posts",
						"std" 		=> "6",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Page Links</h3>",
						"type" 		=> "info"
				);
				
				
$of_options[] = array( 	"name" 		=> "Select Portfolio Page",
						"desc" 		=> "Choose it for homepage links go right",
						"id" 		=> "portfolio_page",
						"std" 		=> "",
						"type" 		=> "select",
						"options" 	=> $of_pages
				);
				
				
$of_options[] = array( 	"name" 		=> "Select 'About Me' Page",
						"desc" 		=> "Choose it for homepage links go right",
						"id" 		=> "aboutme_page",
						"std" 		=> "",
						"type" 		=> "select",
						"options" 	=> $of_pages
				);
				
				
$of_options[] = array(  "name" 		=> "Provide your resume page link to the author picture",
						"id" 		=> "author_picture_link",
						"std" 		=> 0,
						"type" 		=> "switch"
				);
				
				
$of_options[] = array(  "name" 		=> "Provide your resume page link to the author name",
						"id" 		=> "author_name_link",
						"std" 		=> 0,
						"type" 		=> "switch"
				);


// Personal Infos
$of_options[] = array( 	"name" 		=> "Personal Infos",
						"type" 		=> "heading"
				);
					
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Write your personal information</h3>",
						"type" 		=> "info"
				);
					
$of_options[] = array( 	"name" 		=> "Upload Your Picture",
						"desc" 		=> "Default picture size: 92*112px",
						"id" 		=> "chloe_photo",
						"type" 		=> "upload"
				);
				
$of_options[] = array( 	"name" 		=> "Author Name",
						"id" 		=> "chloe_author_name",
						"type" 		=> "text",
						"std"       => "David Sylvain"
				);	

$of_options[] = array( 	"name" 		=> "Author Job",
						"id" 		=> "chloe_author_work",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "About Author",
						"id" 		=> "chloe_author_about",
						"type" 		=> "textarea"
				);
				
$of_options[] = array( 	"name" 		=> "Phone Number",
						"id" 		=> "chloe_author_phone",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Address",
						"id" 		=> "chloe_author_address",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "E-Mail",
						"id" 		=> "chloe_author_email",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Google Map Latitude",
						"desc" 		=> "Example: 40.714834,-74.006031",
						"id" 		=> "chloe_map_latitude",
						"type" 		=> "text"
				);
				

$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Social Links</h3>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Twitter",
						"desc" 		=> "If not have your Twitter account, leave this field blank",
						"id" 		=> "twitter_url",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Facebook",
						"desc" 		=> "If not have your Facebook account, leave this field blank",
						"id" 		=> "facebook_url",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Google Plus",
						"desc" 		=> "If not have your Google Plus account, leave this field blank",
						"id" 		=> "gplus_url",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Dribbble",
						"desc" 		=> "If not have your Dribbble account, leave this field blank",
						"id" 		=> "dribbble_url",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Pinterest",
						"desc" 		=> "If not have your Pinterest account, leave this field blank",
						"id" 		=> "pinterest_url",
						"type" 		=> "text"
				);
				
$of_options[] = array( 	"name" 		=> "Vimeo",
						"desc" 		=> "If not have your Vimeo account, leave this field blank",
						"id" 		=> "vimeo_url",
						"type" 		=> "text"
				);
				


// other settings	
$of_options[] = array( 	"name" 		=> "Other Settings",
						"type" 		=> "heading"
				);
				
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Tracking / Space Before Head / Space Before Body Code / Custom CSS</h3>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Tracking Code",
						"desc" 		=> "Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.",
						"id" 		=> "tracking_codes",
						"type" 		=> "textarea"
				);
				
$of_options[] = array( "name" => "Space before &lt;/head&gt;",
						"desc" => "Add code before the &lt;/head&gt; tag.",
						"id" => "space_head",
						"std" => "",
						"type" => "textarea"
					);

$of_options[] = array( "name" => "Space before &lt;/body&gt;",
						"desc" => "Add code before the &lt;/body&gt; tag.",
						"id" => "space_body",
						"std" => "",
						"type" => "textarea"
					 );
					
$of_options[] = array( 	"name" 		=> "Custom CSS",
						"desc" 		=> "Quickly add some CSS to your theme by adding it to this block.",
						"id" 		=> "custom_css",
						"type" 		=> "textarea"
				);


// Typography
$of_options[] = array( 	"name" 		=> "Typography",
						"type" 		=> "heading"
				);
				
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Use 600+ Google Font Family</h3>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Heading Font Family",
						"desc" 		=> "Default 'Roboto'",
						"id" 		=> "heading_font",
						"std" 		=> "Roboto",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => "This is my preview text!",
										"size" => "22px"
						),
						"options" 	=> $google_fonts
				);
				
$of_options[] = array( 	"name" 		=> "Article Font Family",
						"desc" 		=> "Default 'Open Sans'",
						"id" 		=> "article_font",
						"std" 		=> "Open Sans",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => "Labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.",
										"size" => "15px"
						),
						"options" 	=> $google_fonts
				);
				
$of_options[] = array( 	"name" 		=> "Navigation Font Family",
						"desc" 		=> "Default 'Open Sans'",
						"id" 		=> "navigation_font",
						"std" 		=> "Open Sans",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => "This is my preview text!",
										"size" => "15px"
						),
						"options" 	=> $google_fonts
				);

				
$of_options[] = array( 	"name" 		=> "Header Font Family",
						"desc" 		=> "Default 'Open Sans'",
						"id" 		=> "header_font",
						"std" 		=> "Open Sans",
						"type" 		=> "select_google_font",
						"preview" 	=> array(
										"text" => "This is my preview text!",
										"size" => "15px"
						),
						"options" 	=> $google_fonts
				);
				

$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Font Settings</h3>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Post Title Style",
						"desc" 		=> "Default 'italic'",
						"id" 		=> "post_title_style",
						"std" 		=> "italic",
						"type" 		=> "select",
						"options" 	=> $font_styles
				);
				
				
$of_options[] = array( 	"name" 		=> "Article Font Size",
						"desc" 		=> "Default 14px",
						"id" 		=> "article_font_size",
						"std" 		=> "14px",
						"type" 		=> "text"
				);
				
				
$of_options[] = array( 	"name" 		=> "Article Line height",
						"desc" 		=> "Default 22px",
						"id" 		=> "article_line_height",
						"std" 		=> "22px",
						"type" 		=> "text"
				);


// Color Options
$of_options[] = array( 	"name" 		=> "Color Options",
						"type" 		=> "heading"
				);
				
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Background Image Settings</h3>",
						"type" 		=> "info"
				);
				
	
$of_options[] = array( "name" => "Background Patterns",
						"id" => "chloe_background_patterns",
						"type" => "select",
						"options" => $patterns);

				
$of_options[] = array( 	"name" 		=> "Upload Background Image",
						"id" 		=> "chloe_background_image",
						"type" 		=> "upload"
				);
				
$of_options[] = array( "name" => "Background Repeat",
						"id" => "chloe_background_repeat",
						"type" => "select",
						"options" => $body_repeat);
						
$of_options[] = array( "name" => "Background Attachment",
						"id" => "chloe_background_attachment",
						"type" => "select",
						"options" => $body_attachment);
						
$of_options[] = array( "name" => "Background Cover",
						"id" => "chloe_background_cover",
						"type" => "select",
						"std"  => "No",
						"options" => $body_size_cover);
						
$of_options[] = array( "name" => "Background Position",
						"id" => "background_position",
						"type" => "select",
						"options" => $body_pos);
						
$of_options[] = array( 	"name" 		=> "Background Color",
						"desc" 		=> "default: #403557",
						"id" 		=> "background_color",
						"std" 		=> "#403557",
						"type" 		=> "color"
);


$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Theme Colors</h3>",
						"type" 		=> "info"
				);

$of_options[] = array( 	"name" 		=> "Main Color",
						"desc" 		=> "default: #CF3C1F<br />default green: #689436<br />default blue: #098D84",
						"id" 		=> "main_color",
						"std" 		=> "#CF3C1F",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Main Color more Light",
						"desc" 		=> "Choose a color more light of main Color. default: #ce6854<br />default green: #6F9345<br />default blue: #278C85",
						"id" 		=> "main_color_light",
						"std" 		=> "#ce6854",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Post Share mouse-over Color",
						"desc" 		=> "default: #DF4729<br />default green: #608832<br />default blue: #03A09B",
						"id" 		=> "post_share_color",
						"std" 		=> "#DF4729",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Header Link Colors",
						"desc" 		=> "default: #CF7636<br />default green: #71A13B<br />default blue: #08b2ac",
						"id" 		=> "header_link_colors",
						"std" 		=> "#CF7636",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Header Author Name Color",
						"desc" 		=> "default: #CE7636<br />default green: #71A13B<br />default blue: #08b2ac",
						"id" 		=> "header_author_color",
						"std" 		=> "#CE7636",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Sub Menu Background Color",
						"desc" 		=> "default: #DD3F22<br />default green: #6F9E3A<br />default blue: #358C86",
						"id" 		=> "sub_menu_Background_color",
						"std" 		=> "#DD3F22",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Link Color",
						"desc" 		=> "default: #CF3C1F<br />default green: #689436<br />default blue: #098D84",
						"id" 		=> "link_color",
						"std" 		=> "#CF3C1F",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Link Hover Color",
						"desc" 		=> "default: #A93119<br />default green: #599316<br />default blue: #098D84",
						"id" 		=> "link_hover_color",
						"std" 		=> "#A93119",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Sidebar Link Color",
						"desc" 		=> "default: #FFFFFF<br />default green: #FFFFFF<br />default blue: #098D84",
						"id" 		=> "menu_link_color",
						"std" 		=> "#FFFFFF",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Sidebar Link Color mouse over",
						"desc" 		=> "default: #660404<br />default green: #BBDA98<br />default blue: #A1F9F3",
						"id" 		=> "menu_link_color_hover",
						"std" 		=> "#660404",
						"type" 		=> "color"
);

$of_options[] = array( 	"name" 		=> "Sidebar text Colors",
						"desc" 		=> "default: #FFFFFF<br />default green: #FFFFFF<br />default blue: #FFFFFF",
						"id" 		=> "nav_text_color",
						"std" 		=> "#FFFFFF",
						"type" 		=> "color"
);


// Footer
$of_options[] = array( 	"name" 		=> "Footer",
						"type" 		=> "heading"
				);
				
$of_options[] = array( 	"std" 		=> "<h3 style='margin:0px;'>Footer</h3>",
						"type" 		=> "info"
				);
				
$of_options[] = array( 	"name" 		=> "Copyright",
						"id" 		=> "footer_copyright",
						"std" 		=> "&copy; Copyright 2013. All Rights Reserved.",
						"type" 		=> "textarea"
				);
			
$of_options[] = array( 	"name" 		=> "Footer Right",
						"id" 		=> "footer_right",
						"std" 		=> "Coded and designed by <a target='_blank' href='http://www.waspthemes.com'>Wasp Themes</a>",
						"type" 		=> "textarea"
				);
				
				
// Backup Options
$of_options[] = array( 	"name" 		=> "Backup Options",
						"type" 		=> "heading",
						"icon"		=> ADMIN_IMAGES . "icon-slider.png"
				);
				
$of_options[] = array( 	"name" 		=> "Backup and Restore Options",
						"id" 		=> "of_backup",
						"std" 		=> "",
						"type" 		=> "backup",
						"desc" 		=> 'You can use the two buttons below to backup your current options, and then restore it back at a later time. This is useful if you want to experiment on the options but would like to keep the old settings in case you need it back.',
				);
				
$of_options[] = array( 	"name" 		=> "Transfer Theme Options Data",
						"id" 		=> "of_transfer",
						"std" 		=> "",
						"type" 		=> "transfer",
						"desc" 		=> 'You can tranfer the saved options data between different installs by copying the text inside the text box. To import data from another install, replace the data in the text box with the one from another install and click "Import Options".',
				);
				
	}
}

?>