<?php

namespace Database\Seeders;

use App\Models\Bus;
use Illuminate\Database\Seeder;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $buses = [
            [
                'name' => 'arm trevels',
                'bus_code' => 'Arm1254',
                'from' => 'colombo',
                'to' => 'jaffna',
                'arrival_days' => 'Every day',
                'arrival_time' => '11:00',
                'fare' => '1300',
                'driver_name' => 'Akram',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'sri trevels',
                'bus_code' => 'Arm5478',
                'from' => 'jaffna',
                'to' => 'Puttalam',
                'arrival_days' => 'Every day except sunday',
                'arrival_time' => '12:00',
                'fare' => '1300',
                'driver_name' => 'ragavan',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'PPT trevels',
                'bus_code' => 'Arm2541',
                'from' => 'jaffna',
                'to' => 'vavuniya',
                'arrival_days' => 'Sunday',
                'arrival_time' => '12:00',
                'fare' => '500',
                'driver_name' => 'kajan',
                'status' => '1',
                'seats' => '50',
            ],

            [
                'name' => 'arm trevels',
                'bus_code' => 'Arm2874',
                'from' => 'jaffna ',
                'to' => 'polanaruwa',
                'arrival_days' => 'Monday',
                'arrival_time' => '12:00',
                'fare' => '1300',
                'driver_name' => 'lojan',
                'status' => '1',
                'seats' => '50',
            ],

            [
                'name' => 'PPT trevels',
                'bus_code' => 'Arm8747',
                'from' => 'jaffna',
                'to' => 'pothuvillu',
                'arrival_days' => 'Tuesday',
                'arrival_time' => '12:00',
                'fare' => '1500',
                'driver_name' => 'piriyan',
                'status' => '1',
                'seats' => '50',
            ],

            [
                'name' => 'express Bus',
                'bus_code' => 'Arm3657',
                'from' => 'jaffna',
                'to' => 'anuradhapura',
                'arrival_days' => 'Wednesday',
                'arrival_time' => '12:00',
                'fare' => '345',
                'driver_name' => 'Akram',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'Night trevels',
                'bus_code' => 'Arm4030',
                'from' => 'colombo',
                'to' => 'jafna',
                'arrival_days' => 'Thursday',
                'arrival_time' => '12:00',
                'fare' => '550',
                'driver_name' => 'Akram',
                'status' => '1',
                'seats' => '50',
            ],
            [
                'name' => 'sangagiri trevels',
                'bus_code' => 'Arm2540',
                'from' => 'vavuniya',
                'to' => 'jaffna',
                'arrival_days' => 'Everyday',
                'arrival_time' => '12:00',
                'fare' => '550',
                'driver_name' => 'Ragavan',
                'status' => '1',
                'seats' => '50',
            ],

        ];
        foreach ($buses as $index => $bus) {
            $i = $index + 1;
            $bus = Bus::factory()->create([
                'name' => $bus['name'],
                'bus_code' => $bus['bus_code'],
                'img' =>  'images/bus/' . $i . '.jpg',
                'from' => $bus['from'],
                'to' => $bus['to'],
                'arrival_days' => $bus['arrival_days'],
                'arrival_time' => $bus['arrival_time'],
                'fare' => $bus['fare'],
                'driver_name' => $bus['driver_name'],
                'status' => $bus['status'],
                'seats' => $bus['seats'],
            ]);
        }
    }
}
