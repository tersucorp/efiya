<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'business_name' => $this->faker->company,
            'business_type' => $this->faker->randomElement(['Fashion', 'Office', 'Mechanic', 'Carpenter', 'Tailor', 'Plumber', 'Electrician', 'Cleaner']),
            'tax_id' => $this->faker->regexify('[A-Z0-9]{10}'),
            'reg_no' => $this->faker->regexify('[A-Z0-9]{10}'),
            'website_url' => $this->faker->url,
            'house_number' => $this->faker->buildingNumber,
            'street' => $this->faker->streetName,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'country' => $this->faker->country,
            'zip_code' => $this->faker->postcode,
            'description' => $this->faker->paragraph,
            'services' => $this->faker->words(5, true),
            'user_id' => User::factory(),
            'twitter' => $this->faker->url,
            'facebook' => $this->faker->url,
            'instagram' => $this->faker->url,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'secondary_phone' => $this->faker->phoneNumber,
            'opening_hours' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'closing_hours' => $this->faker->time($format = 'H:i:s', $max = 'now'),
            'delivery_options' => $this->faker->sentence,
            'return_policy' => $this->faker->sentence,
            'is_featured' => $this->faker->boolean,
            'ratings_count' => $this->faker->numberBetween(0, 1000),
            'average_rating' => $this->faker->randomFloat(2, 0, 5),
            'avatar' => $this->faker->randomElement([
                'https://img.freepik.com/free-vector/business-card-set-creative-clean-business-card-template_460848-8785.jpg',
                'https://img.freepik.com/free-vector/gradient-energy-logo-template_23-2149999439.jpg',
                'https://img.freepik.com/premium-vector/electric-technician-mascot-logo_7737-2759.jpg',
                'https://img.freepik.com/premium-photo/logo-faith-stitch-designs-black-gold_947814-101925.jpg',
                'https://img.freepik.com/free-vector/feminine-business-logo-template-aesthetic-branding-design-vector-orderly-fashion_53876-156438.jpg',
                'https://img.freepik.com/free-vector/mechanical-repair-logo-design_23-2150013319.jpg',
                'https://img.freepik.com/free-vector/hand-drawn-carpenter-logo-design_23-2150637749.jpg',
                'https://img.freepik.com/free-vector/creative-cleaning-service-logo_23-2149214527.jpg',
                'https://img.freepik.com/free-vector/gradient-carpet-cleaning-logo-design_23-2150713899.jpg'
            ]),
            'banner' => $this->faker->randomElement([
                'https://img.freepik.com/free-photo/african-woman-dressed-stylish-yellow-jacket-carries-shopping-bag-uses-mobile-phone-online-communication-poses-near-clothing-rail-against-yellow-background_273609-34139.jpg',
                'https://img.freepik.com/premium-photo/fashion-influencer-films-shopping-haul_482257-86635.jpg',
                'https://img.freepik.com/free-photo/bipoc-specialist-car-service-using-professional-mechanical-tool-repair-broken-ignition-system-licensed-specialist-garage-fixing-client-automobile-ensuring-optimal-automotive-performance_482257-73049.jpg',
                'https://img.freepik.com/free-photo/carpenter-cutting-mdf-board-inside-workshop_23-2149451099.jpg',
                'https://img.freepik.com/free-photo/two-african-dressmaker-woman-designed-new-red-dress-mannequin-tailor-office-black-seamstress-girls_627829-4465.jpg',
                'https://img.freepik.com/free-photo/asian-plumber-blue-overalls-clearing-blockage-drain_1098-17773.jpg',
                'https://img.freepik.com/free-photo/man-electrical-technician-working-switchboard-with-fuses_169016-24062.jpg',
                'https://img.freepik.com/free-photo/young-smiling-woman-vacuum-cleaning-carpet_1163-2426.jpg',
                'https://img.freepik.com/free-photo/full-shot-men-cleaning-office_23-2149345551.jpg'
            ]),
        ];
    }
}
