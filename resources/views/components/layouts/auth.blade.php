<x-layouts.app>
    <div class="authLayout">
        {{ $slot }}
    </div>
</x-layouts.app>

<style>
.authLayout {
    max-width: 400px;
    margin: 30px auto 0;
}
</style>
