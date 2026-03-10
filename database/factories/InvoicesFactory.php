<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Invoices;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoices>
 */
class InvoicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'amount' => $this->faker->numberBetween(100, 20000),
            'status' => $status = $this->faker->randomElement(['paid', 'unpaid', 'overdue']),
            'billed_date' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $status === 'paid' ? $this->faker->dateTimeThisDecade() : null,
            
        ];
    }
}
