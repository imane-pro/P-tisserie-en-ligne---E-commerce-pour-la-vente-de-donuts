<x-app-layout>
    <div>
        <div class="container py-4">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <div class="card mb-4 card-spacing">
                    <div class="card-body">
                        @livewire('profile.update-profile-information-form')
                    </div>
                </div>
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="card mb-4 card-spacing">
                    <div class="card-body">
                        @livewire('profile.update-password-form')
                    </div>
                </div>
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="card mb-4 card-spacing">
                    <div class="card-body">
                        @livewire('profile.two-factor-authentication-form')
                    </div>
                </div>
            @endif

            <div class="card mb-4 card-spacing">
                <div class="card-body">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <div class="card mb-4 card-spacing">
                    <div class="card-body">
                        @livewire('profile.delete-user-form')
                    </div>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
<style>
/* Centrer le contenu */
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    min-height: 100vh; /* pour centrer verticalement */
}

.card {
    width: 100%;
    max-width: 600px; /* Limiter la largeur maximale */
    margin: 0 auto;
}

.card-body {
    display: flex;
    flex-direction: column;
    align-items: center;
}

/* Ajouter de l'espace entre chaque carte */
.card-spacing {
    margin-bottom: 1rem; /* Ajouter de l'espace entre les cartes */
}

/* Style pour placer les labels au-dessus des inputs */
.form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 1rem;
    width: 100%;
}

label {
    margin-bottom: 0.5rem;
    font-weight: bold;
}

input,
textarea,
select {
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}
</style>
