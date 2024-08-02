<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Store {
    public static function all(): array {
        return [
            [
                'id' => 1,
                'firstname' => 'David',
                'lastname' => 'Smith',
                'gender' => 'Male',
                'skills' => ['Electrical Repairs', 'Plumbing', 'Painting', 'Drywall Installation'],
                'description' => 'Experienced handyman with a broad skill set covering electrical repairs, plumbing, painting, and drywall installation.',
                'rating' => 4.5,
                'experience_years' => 7,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30'        ],
            [
                'id' => 2,
                'firstname' => 'Emily',
                'lastname' => 'Johnson',
                'gender' => 'Female',
                'skills' => ['Furniture Assembly', 'Appliance Repair', 'Home Maintenance', 'Gardening'],
                'description' => 'Versatile handywoman skilled in furniture assembly, appliance repair, home maintenance tasks, and gardening.',
                'rating' => 4.7,
                'experience_years' => 5,
                'availability' => 'Available starting next week',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
            ],
            [
                'id' => 3,
                'firstname' => 'Michael',
                'lastname' => 'Williams',
                'gender' => 'Male',
                'skills' => ['Carpet Installation', 'Tile Work', 'Woodworking', 'Home Renovation Projects'],
                'description' => 'Handyman with expertise in carpet installation, tile work, woodworking, and managing various home renovation projects.',
                'rating' => 4.9,
                'experience_years' => 10,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
            ],
            [
                'id' => 4,
                'firstname' => 'Jessica',
                'lastname' => 'Brown',
                'gender' => 'Female',
                'skills' => ['Window Replacement', 'Roof Repairs', 'Deck Construction', 'Outdoor Carpentry'],
                'description' => 'Professionally trained handywoman with experience in window replacement, roof repairs, deck construction, and outdoor carpentry.',
                'rating' => 4.8,
                'experience_years' => 8,
                'availability' => 'Available starting next month',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
            ],
            [
                'id' => 5,
                'firstname' => 'Robert',
                'lastname' => 'Jones',
                'gender' => 'Male',
                'skills' => ['Heating & Cooling Systems', 'Water Heater Installation', 'Septic System Maintenance', 'Drain Cleaning'],
                'description' => 'Licensed handyman specializing in heating & cooling systems, water heater installations, septic system maintenance, and drain cleaning.',
                'rating' => 4.6,
                'experience_years' => 15,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
            ],
            [
                'id' => 6,
                'firstname' => 'Jennifer',
                'lastname' => 'Davis',
                'gender' => 'Female',
                'skills' => ['Kitchen Remodeling', 'Bathroom Renovation', 'Flooring Installation', 'Wall Painting'],
                'description' => 'Experienced handywoman with a focus on kitchen remodeling, bathroom renovation, flooring installation, and wall painting.',
                'rating' => 4.4,
                'experience_years' => 12,
                'availability' => 'Available starting next week',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
            ],
            [
                'id' => 7,
                'firstname' => 'Daniel',
                'lastname' => 'Clark',
                'gender' => 'Male',
                'skills' => ['Plumbing', 'Painting', 'Flooring Installation', 'Drywall Repair'],
                'description' => 'Experienced handyman with skills in plumbing, painting, flooring installation, and drywall repair.',
                'rating' => 4.2,
                'experience_years' => 6,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
            ],
            [
                'id' => 8,
                'firstname' => 'Sarah',
                'lastname' => 'Martinez',
                'gender' => 'Female',
                'skills' => ['Furniture Assembly', 'Home Cleaning', 'Gardening', 'Pet Care'],
                'description' => 'Handywoman with experience in furniture assembly, home cleaning, gardening, and pet care.',
                'rating' => 4.6,
                'experience_years' => 4,
                'availability' => 'Available starting next week',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/sarah-martinez'
            ],
            [
                'id' => 9,
                'firstname' => 'James',
                'lastname' => 'Lewis',
                'gender' => 'Male',
                'skills' => ['Electrical Wiring', 'Lighting Installation', 'Generator Maintenance', 'Circuit Breaker Replacement'],
                'description' => 'Certified electrician with skills in electrical wiring, lighting installation, generator maintenance, and circuit breaker replacement.',
                'rating' => 4.7,
                'experience_years' => 9,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/james-lewis'
            ],
            [
                'id' => 10,
                'firstname' => 'Elizabeth',
                'lastname' => 'Harris',
                'gender' => 'Female',
                'skills' => ['Painting', 'Flooring', 'Wall Repairs', 'Ceiling Repairs'],
                'description' => 'Handywoman with expertise in painting, flooring, wall repairs, and ceiling repairs.',
                'rating' => 4.3,
                'experience_years' => 8,
                'availability' => 'Available starting next week',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/elizabeth-harris'
            ],
            [
                'id' => 11,
                'firstname' => 'John',
                'lastname' => 'Young',
                'gender' => 'Male',
                'skills' => ['Carpentry', 'Roofing', 'Masonry', 'Deck Building'],
                'description' => 'Experienced handyman with skills in carpentry, roofing, masonry, and deck building.',
                'rating' => 4.8,
                'experience_years' => 12,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/john-young'
            ],
            [
                'id' => 12,
                'firstname' => 'Samantha',
                'lastname' => 'Hall',
                'gender' => 'Female',
                'skills' => ['Appliance Installation', 'Tile Laying', 'Cabinet Making', 'Window Installation'],
                'description' => 'Handywoman skilled in appliance installation, tile laying, cabinet making, and window installation.',
                'rating' => 4.5,
                'experience_years' => 7,
                'availability' => 'Available starting next month',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/samantha-hall'
            ],
            [
                'id' => 13,
                'firstname' => 'Charles',
                'lastname' => 'Allen',
                'gender' => 'Male',
                'skills' => ['Electrical Troubleshooting', 'Solar Panel Installation', 'Battery Storage Systems', 'Energy Audits'],
                'description' => 'Electrician with expertise in electrical troubleshooting, solar panel installation, battery storage systems, and energy audits.',
                'rating' => 4.9,
                'experience_years' => 11,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/charles-allen'
            ],
            [
                'id' => 14,
                'firstname' => 'Olivia',
                'lastname' => 'Walker',
                'gender' => 'Female',
                'skills' => ['Fence Installation', 'Lawn Care', 'Irrigation Systems', 'Tree Trimming'],
                'description' => 'Handywoman with skills in fence installation, lawn care, irrigation systems, and tree trimming.',
                'rating' => 4.7,
                'experience_years' => 6,
                'availability' => 'Available starting next week',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/olivia-walker'
            ],
            [
                'id' => 15,
                'firstname' => 'Joseph',
                'lastname' => 'King',
                'gender' => 'Male',
                'skills' => ['Home Theater Installation', 'Smart Home Devices', 'Networking', 'CCTV Installation'],
                'description' => 'Technician specializing in home theater installation, smart home devices, networking, and CCTV installation.',
                'rating' => 4.6,
                'experience_years' => 10,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/joseph-king'
            ],
            [
                'id' => 16,
                'firstname' => 'Isabella',
                'lastname' => 'Wright',
                'gender' => 'Female',
                'skills' => ['Gutter Cleaning', 'Pressure Washing', 'Window Cleaning', 'General Cleaning'],
                'description' => 'Handywoman with a focus on gutter cleaning, pressure washing, window cleaning, and general cleaning.',
                'rating' => 4.4,
                'experience_years' => 4,
                'availability' => 'Available starting next month',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/isabella-wright'
            ],
            [
                'id' => 17,
                'firstname' => 'Matthew',
                'lastname' => 'Green',
                'gender' => 'Male',
                'skills' => ['Landscaping', 'Garden Design', 'Lawn Mowing', 'Tree Planting'],
                'description' => 'Experienced landscaper with skills in garden design, lawn mowing, tree planting, and general landscaping.',
                'rating' => 4.8,
                'experience_years' => 8,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/matthew-green'
            ],
            [
                'id' => 18,
                'firstname' => 'Sophia',
                'lastname' => 'Adams',
                'gender' => 'Female',
                'skills' => ['Interior Design', 'Home Staging', 'Furniture Reupholstery', 'Color Consultation'],
                'description' => 'Handywoman with expertise in interior design, home staging, furniture reupholstery, and color consultation.',
                'rating' => 4.9,
                'experience_years' => 9,
                'availability' => 'Available starting next week',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/sophia-adams'
            ],
            [
                'id' => 19,
                'firstname' => 'Christopher',
                'lastname' => 'Nelson',
                'gender' => 'Male',
                'skills' => ['HVAC Repair', 'Duct Cleaning', 'Thermostat Installation', 'Air Quality Testing'],
                'description' => 'Licensed HVAC technician with skills in HVAC repair, duct cleaning, thermostat installation, and air quality testing.',
                'rating' => 4.5,
                'experience_years' => 13,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/christopher-nelson'
            ],
            [
                'id' => 20,
                'firstname' => 'Charlotte',
                'lastname' => 'Baker',
                'gender' => 'Female',
                'skills' => ['Roof Installation', 'Gutter Repair', 'Siding Installation', 'Insulation'],
                'description' => 'Handywoman with expertise in roof installation, gutter repair, siding installation, and insulation.',
                'rating' => 4.6,
                'experience_years' => 11,
                'availability' => 'Available starting next month',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/charlotte-baker'
            ],
            [
                'id' => 21,
                'firstname' => 'Anthony',
                'lastname' => 'Carter',
                'gender' => 'Male',
                'skills' => ['Basement Finishing', 'Attic Insulation', 'Foundation Repair', 'Waterproofing'],
                'description' => 'Handyman with skills in basement finishing, attic insulation, foundation repair, and waterproofing.',
                'rating' => 4.4,
                'experience_years' => 10,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/anthony-carter'
            ],
            [
                'id' => 22,
                'firstname' => 'Amelia',
                'lastname' => 'Mitchell',
                'gender' => 'Female',
                'skills' => ['Interior Painting', 'Wallpaper Installation', 'Trim Work', 'Cabinet Painting'],
                'description' => 'Handywoman specializing in interior painting, wallpaper installation, trim work, and cabinet painting.',
                'rating' => 4.8,
                'experience_years' => 7,
                'availability' => 'Available starting next week',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/amelia-mitchell'
            ],
            [
                'id' => 23,
                'firstname' => 'William',
                'lastname' => 'Perez',
                'gender' => 'Male',
                'skills' => ['Bricklaying', 'Concrete Work', 'Patio Construction', 'Retaining Walls'],
                'description' => 'Experienced mason with skills in bricklaying, concrete work, patio construction, and retaining walls.',
                'rating' => 4.9,
                'experience_years' => 12,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/william-perez'
            ],
            [
                'id' => 24,
                'firstname' => 'Evelyn',
                'lastname' => 'Roberts',
                'gender' => 'Female',
                'skills' => ['Cleaning', 'Organizing', 'Decluttering', 'Junk Removal'],
                'description' => 'Handywoman with a focus on cleaning, organizing, decluttering, and junk removal.',
                'rating' => 4.5,
                'experience_years' => 5,
                'availability' => 'Available starting next month',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/evelyn-roberts'
            ],
            [
                'id' => 25,
                'firstname' => 'Alexander',
                'lastname' => 'Turner',
                'gender' => 'Male',
                'skills' => ['Drywall Installation', 'Plastering', 'Painting', 'Ceiling Repair'],
                'description' => 'Handyman with skills in drywall installation, plastering, painting, and ceiling repair.',
                'rating' => 4.7,
                'experience_years' => 9,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/alexander-turner'
            ],
            [
                'id' => 26,
                'firstname' => 'Grace',
                'lastname' => 'Collins',
                'gender' => 'Female',
                'skills' => ['Carpentry', 'Trim Work', 'Cabinet Making', 'Furniture Restoration'],
                'description' => 'Handywoman with skills in carpentry, trim work, cabinet making, and furniture restoration.',
                'rating' => 4.6,
                'experience_years' => 8,
                'availability' => 'Available starting next week',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/grace-collins'
            ],
            [
                'id' => 27,
                'firstname' => 'Andrew',
                'lastname' => 'Garcia',
                'gender' => 'Male',
                'skills' => ['Framing', 'Roofing', 'Siding Installation', 'Gutter Installation'],
                'description' => 'Handyman with skills in framing, roofing, siding installation, and gutter installation.',
                'rating' => 4.7,
                'experience_years' => 10,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/andrew-garcia'
            ],
            [
                'id' => 28,
                'firstname' => 'Victoria',
                'lastname' => 'White',
                'gender' => 'Female',
                'skills' => ['Landscaping', 'Lawn Care', 'Irrigation', 'Tree Trimming'],
                'description' => 'Handywoman with skills in landscaping, lawn care, irrigation, and tree trimming.',
                'rating' => 4.5,
                'experience_years' => 6,
                'availability' => 'Available starting next month',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/victoria-white'
            ],
            [
                'id' => 29,
                'firstname' => 'Joshua',
                'lastname' => 'Thompson',
                'gender' => 'Male',
                'skills' => ['Deck Construction', 'Pergola Building', 'Fence Installation', 'Patio Construction'],
                'description' => 'Handyman with skills in deck construction, pergola building, fence installation, and patio construction.',
                'rating' => 4.8,
                'experience_years' => 7,
                'availability' => 'Available immediately',
                'profile_picture_url' => 'https://img.freepik.com/free-photo/young-african-american-builder-man-wearing-construction-uniform-safety-helmet-holding-paint-roller-brush-smiling-cheerfully-standing-pink_141793-18994.jpg?t=st=1722601581~exp=1722602181~hmac=8ffabe172211d440ad65270e10c0c2e34bba060abd422e99d91504bde2c9fa30',
                'store_link' => 'https://example.com/joshua-thompson'
            ],
            [
                'id' => 30,
                'firstname' => 'Zoe',
                'lastname' => 'Lee',
                'gender' => 'Female',
                'skills' => ['Bathroom Remodeling', 'Tile Installation', 'Plumbing', 'Grouting'],
                'description' => 'Handywoman with skills in bathroom remodeling, tile installation, plumbing, and grouting.',
                'rating' => 4.6,
                'experience_years' => 9,
                'availability' => 'Available starting next week',
                'profile_picture_url' => 'https://www.shutterstock.com/image-photo/young-african-american-handywoman-yellow-260nw-2136575025.jpg',
                'store_link' => 'https://example.com/zoe-lee'
            ]
        ];
    }
}

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/marketplace/store/{storeId}', function ($storeId){
    $store = Arr::first(Store::all(), fn($store) => $store['id'] == $storeId);
    return view('store', ['store' => $store]);
});

Route::get('/marketplace', function (){
    return view('marketplace', ['stores' => Store::all()]);
});

Route::get('/services', function(){
    return view('services');
});

Route::get('/signup', function(){
    return view('signup');
});
