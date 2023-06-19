<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Tableau des produits (20 produits)
        $products = [
            [
                'name' => 'Apple MacBook Pro',
                'price' => 1999.99,
                'short_description' => 'Powerful laptop for professional use',
                'long_description' => 'The Apple MacBook Pro is a high-performance laptop with advanced features, ideal for professionals and creative individuals. It boasts a sleek design, retina display, fast processors, and ample storage.',
                'image' => 'macbook_pro.jpg',
            ],
            [
                'name' => 'Samsung Galaxy S21',
                'price' => 899.99,
                'short_description' => 'Flagship smartphone with stunning display',
                'long_description' => 'The Samsung Galaxy S21 is a top-of-the-line smartphone featuring a vibrant AMOLED display, powerful camera system, and fast performance. It comes with an array of smart features and a stylish design.',
                'image' => 'galaxy_s21.jpg',
            ],
            [
                'name' => 'Dell XPS 13',
                'price' => 1399.99,
                'short_description' => 'Ultra-portable laptop with a borderless display',
                'long_description' => 'The Dell XPS 13 is a highly portable laptop with a virtually borderless InfinityEdge display. It offers exceptional performance, long battery life, and a premium build quality, making it perfect for on-the-go professionals.',
                'image' => 'dell_xps_13.jpg',
            ],
            [
                'name' => 'Sony PlayStation 5',
                'price' => 499.99,
                'short_description' => 'Next-generation gaming console',
                'long_description' => 'The Sony PlayStation 5 is a powerful gaming console that delivers stunning graphics, immersive gameplay, and lightning-fast load times. With its innovative DualSense controller and a vast library of games, it provides an unparalleled gaming experience.',
                'image' => 'playstation_5.jpg',
            ],
            [
                'name' => 'Canon EOS R5',
                'price' => 3799.99,
                'short_description' => 'High-resolution mirrorless camera',
                'long_description' => 'The Canon EOS R5 is a professional-grade mirrorless camera with a 45-megapixel full-frame sensor. It offers advanced autofocus, 8K video recording, and impressive image stabilization, making it a top choice for photographers and videographers.',
                'image' => 'canon_eos_r5.jpg',
            ],
            [
                'name' => 'Apple AirPods Pro',
                'price' => 249.99,
                'short_description' => 'Premium noise-canceling earphones',
                'long_description' => 'The Apple AirPods Pro are wireless earphones with active noise cancellation, delivering immersive sound and a customizable fit. They offer easy pairing with Apple devices, hands-free Siri activation, and a convenient wireless charging case.',
                'image' => 'airpods_pro.jpg',
            ],
            [
                'name' => 'Samsung QLED 4K Smart TV',
                'price' => 1299.99,
                'short_description' => 'Crystal-clear 4K resolution with smart features',
                'long_description' => 'The Samsung QLED 4K Smart TV combines stunning picture quality with smart functionality. It features quantum dot technology for vibrant colors, HDR support, and a user-friendly interface for accessing streaming services and apps.',
                'image' => 'samsung_qled_tv.jpg',
            ],
            [
                'name' => 'Microsoft Surface Book 3',
                'price' => 1999.99,
                'short_description' => 'Versatile 2-in-1 laptop and tablet',
                'long_description' => 'The Microsoft Surface Book 3 is a convertible device that functions as both a powerful laptop and a detachable tablet. It offers a high-resolution PixelSense display, long battery life, and the flexibility to switch between laptop and tablet modes.',
                'image' => 'surface_book_3.jpg',
            ],
            [
                'name' => 'LG UltraWide Curved Monitor',
                'price' => 899.99,
                'short_description' => 'Immersive ultrawide display for productivity',
                'long_description' => 'The LG UltraWide Curved Monitor features a spacious ultrawide screen with a curved design, enhancing productivity and providing an immersive viewing experience. It offers high resolution, accurate color reproduction, and convenient multitasking capabilities.',
                'image' => 'lg_ultrawide_monitor.jpg',
            ],
            [
                'name' => 'Nintendo Switch',
                'price' => 299.99,
                'short_description' => 'Versatile gaming console for home and on-the-go',
                'long_description' => 'The Nintendo Switch is a unique gaming console that can be used both as a handheld device and connected to a TV. It offers a diverse library of games, including popular titles from Nintendo franchises, providing entertainment for all ages.',
                'image' => 'nintendo_switch.jpg',
            ],
            [
                'name' => 'GoPro HERO9 Black',
                'price' => 449.99,
                'short_description' => 'High-resolution action camera with advanced features',
                'long_description' => 'The GoPro HERO9 Black is a feature-packed action camera capable of capturing stunning 5K videos and 20-megapixel photos. It offers advanced stabilization, a front-facing display, and a rugged design, making it perfect for capturing adventures.',
                'image' => 'gopro_hero9.jpg',
            ],
            [
                'name' => 'Razer Blade 15',
                'price' => 1799.99,
                'short_description' => 'Powerful gaming laptop with a sleek design',
                'long_description' => 'The Razer Blade 15 is a high-performance gaming laptop with a slim and stylish design. It features a fast refresh rate display, powerful graphics, and customizable RGB lighting. The Razer Blade 15 is built to deliver an exceptional gaming experience.',
                'image' => 'razer_blade_15.jpg',
            ],
            [
                'name' => 'Bose QuietComfort 35 II',
                'price' => 349.99,
                'short_description' => 'Premium wireless noise-canceling headphones',
                'long_description' => 'The Bose QuietComfort 35 II headphones provide exceptional noise cancellation, comfort, and audio quality. They offer wireless connectivity, built-in Google Assistant and Amazon Alexa, and long battery life, making them perfect for immersive listening experiences.',
                'image' => 'bose_qc35ii.jpg',
            ],
            [
                'name' => 'HP Spectre x360',
                'price' => 1399.99,
                'short_description' => 'Convertible laptop with sleek design',
                'long_description' => 'The HP Spectre x360 is a versatile convertible laptop that combines elegance with performance. It features a 360-degree hinge, a vibrant display, and long battery life. The Spectre x360 offers power and portability in a stylish package.',
                'image' => 'hp_spectre_x360.jpg',
            ],
            [
                'name' => 'Logitech MX Master 3',
                'price' => 99.99,
                'short_description' => 'Advanced wireless mouse for productivity',
                'long_description' => 'The Logitech MX Master 3 is a high-precision wireless mouse designed for productivity. It features a comfortable ergonomic design, customizable buttons, and smooth scrolling. With its advanced tracking technology, it provides precise control and efficiency.',
                'image' => 'logitech_mx_master_3.jpg',
            ],
            [
                'name' => 'Sony WH-1000XM4',
                'price' => 349.99,
                'short_description' => 'Premium wireless noise-canceling headphones',
                'long_description' => 'The Sony WH-1000XM4 headphones deliver exceptional sound quality, industry-leading noise cancellation, and long battery life. They feature intuitive touch controls, multiple device connectivity, and smart listening modes for personalized audio experiences.',
                'image' => 'sony_wh1000xm4.jpg',
            ],
            [
                'name' => 'Acer Predator Helios 300',
                'price' => 1499.99,
                'short_description' => 'Gaming laptop with powerful performance',
                'long_description' => 'The Acer Predator Helios 300 is a gaming laptop that offers impressive performance and graphics capabilities. It features a high-refresh-rate display, a powerful processor, and a dedicated graphics card, providing an immersive gaming experience.',
                'image' => 'acer_predator_helios_300.jpg',
            ],
            [
                'name' => 'Fitbit Versa 3',
                'price' => 229.99,
                'short_description' => 'Advanced smartwatch with fitness tracking',
                'long_description' => 'The Fitbit Versa 3 is a feature-rich smartwatch designed for fitness enthusiasts. It offers built-in GPS, heart rate monitoring, sleep tracking, and various workout modes. With its sleek design and long battery life, it helps you stay connected and motivated.',
                'image' => 'fitbit_versa_3.jpg',
            ],
            [
                'name' => 'Lenovo ThinkPad X1 Carbon',
                'price' => 1899.99,
                'short_description' => 'Premium business laptop with durability',
                'long_description' => 'The Lenovo ThinkPad X1 Carbon is a lightweight and durable business laptop that delivers exceptional performance and reliability. It features a vibrant display, long battery life, and robust security features, making it an excellent choice for professionals.',
                'image' => 'thinkpad_x1_carbon.jpg',
            ],
            [
                'name' => 'JBL Flip 5',
                'price' => 129.99,
                'short_description' => 'Portable waterproof Bluetooth speaker',
                'long_description' => 'The JBL Flip 5 is a compact and portable Bluetooth speaker with a waterproof design. It offers powerful sound, a long-lasting battery, and the ability to connect multiple speakers for a stereo sound experience. Take your music anywhere with this versatile speaker.',
                'image' => 'jbl_flip_5.jpg',
            ]
        ];

        // Boucle sur le tableau des produits
        foreach ($products as $item) {
            $product = new Product();
            $product->setName($item['name']);
            $product->setPrice($item['price']);
            $product->setShortDescription($item['short_description']);
            $product->setLongDescription($item['long_description']);
            $product->setImage($item['image']);

            // Persiste l'objet $product de la liste du tableau $products
            $manager->persist($product);
        }

        $manager->flush();
    }
}
