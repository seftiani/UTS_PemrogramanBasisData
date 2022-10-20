<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Team Settings')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('teams.update-team-name-form', ['team' => $team])->html();
} elseif ($_instance->childHasBeenRendered('ksoJfE4')) {
    $componentId = $_instance->getRenderedChildComponentId('ksoJfE4');
    $componentTag = $_instance->getRenderedChildComponentTagName('ksoJfE4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ksoJfE4');
} else {
    $response = \Livewire\Livewire::mount('teams.update-team-name-form', ['team' => $team]);
    $html = $response->html();
    $_instance->logRenderedChild('ksoJfE4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('teams.team-member-manager', ['team' => $team])->html();
} elseif ($_instance->childHasBeenRendered('oM3HflF')) {
    $componentId = $_instance->getRenderedChildComponentId('oM3HflF');
    $componentTag = $_instance->getRenderedChildComponentTagName('oM3HflF');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oM3HflF');
} else {
    $response = \Livewire\Livewire::mount('teams.team-member-manager', ['team' => $team]);
    $html = $response->html();
    $_instance->logRenderedChild('oM3HflF', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php if(Gate::check('delete', $team) && ! $team->personal_team): ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-border','data' => []]); ?>
<?php $component->withName('jet-section-border'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                <div class="mt-10 sm:mt-0">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('teams.delete-team-form', ['team' => $team])->html();
} elseif ($_instance->childHasBeenRendered('9n0JcBz')) {
    $componentId = $_instance->getRenderedChildComponentId('9n0JcBz');
    $componentTag = $_instance->getRenderedChildComponentTagName('9n0JcBz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('9n0JcBz');
} else {
    $response = \Livewire\Livewire::mount('teams.delete-team-form', ['team' => $team]);
    $html = $response->html();
    $_instance->logRenderedChild('9n0JcBz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            <?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\utslaravelcrud\resources\views/teams/show.blade.php ENDPATH**/ ?>