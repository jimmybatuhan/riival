<?php

use App\Models\CoachProfile;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    public function run()
    {
        factory(CoachProfile::class, 5)
            ->create()
            ->each(function (CoachProfile $coach_profile) {
                $courses = factory(Course::class, 5)->make();
                $coach_profile->courses()->createMany($courses->toArray());
                $coach_profile->courses->each(function (Course $course) {
                    $course->lessons()->createMany(
                        factory(Lesson::class, 5)->make([
                            'course_id' => $course->id,
                        ])->toArray()
                    );
                });
            });
    }
}
