@props(['name', 'locked', 'id', 'course_id', 'completed', 'current', 'color'])
<li class="mb-10 ms-6">
    @if ($locked)
        <x-locked-section  :name="$name" :id="$id" :course_id="$course_id" />
    @elseif($completed)
        <x-completed-section :class="$color" :name="$name" :id="$id" :course_id="$course_id" :current_id="$current" />
    @elseif(!$completed && !$locked)
        <x-not-completed-section  :class="$color" :name="$name" :id="$id" :course_id="$course_id" :current_id="$current"/>
    @endif
</li>
