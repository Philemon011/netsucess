<x-filament-panels::page>

<div style="max-width: 860px; margin: 0 auto; padding: 8px 0 48px;">

    {{-- INTRO --}}
    <div style="margin-bottom:32px;">
        <h2 style="font-size:24px;font-weight:800;margin-bottom:8px;">
            📝 Guide complet — Rédiger un article de blog SEO
        </h2>
        <p style="font-size:15px;line-height:1.7;">
            Suivez ce guide étape par étape pour créer des articles qui plaisent à Google et à vos lecteurs.
            Cochez chaque point de la checklist avant de publier.
        </p>
    </div>

    {{-- SECTION 1 --}}
    <x-filament::section>
        <x-slot name="heading">🔍 Étape 1 — Avant de rédiger : la recherche de mots-clés</x-slot>
        <div class="space-y-4">
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Choisir UN mot-clé principal</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Chaque article cible un seul mot-clé principal. Ex : <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">comment lancer une boutique dropshipping</code></p>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Vérifier le volume de recherche</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Utilisez <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">Google Keyword Planner</code> ou <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">Ubersuggest</code> pour vérifier que des gens recherchent ce mot-clé.</p>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Analyser la concurrence</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Tapez votre mot-clé dans Google et regardez les 5 premiers résultats. Votre article doit être meilleur que ceux-là.</p>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Identifier 3-5 mots-clés secondaires</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Ce sont des variantes du mot-clé principal. Ex : <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">créer boutique en ligne</code>, <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">boutique dropshipping rentable</code></p>
            </div>
        </div>
    </x-filament::section>

    <div style="margin-top:20px;">
    <x-filament::section>
        <x-slot name="heading">✍️ Étape 2 — Le titre (H1 & Meta Title)</x-slot>
        <div class="space-y-4">
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Contient le mot-clé principal</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400 mb-2">Le mot-clé doit apparaître dans les premiers mots du titre.</p>
                <div class="text-sm p-3 rounded bg-gray-100 dark:bg-gray-800">
                    <p>❌ "Tout ce que vous devez savoir sur le dropshipping"</p>
                    <p class="mt-1">✅ "<strong>Comment lancer une boutique dropshipping</strong> rentable en 2026"</p>
                </div>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">50 à 60 caractères maximum</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Au-delà de 60 caractères, Google coupe le titre dans les résultats.</p>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Donne envie de cliquer</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Utilisez des chiffres, des mots forts : <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">Guide complet</code>, <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">en 2026</code>, <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">étape par étape</code></p>
            </div>
        </div>
    </x-filament::section>
    </div>

    <div style="margin-top:20px;">
    <x-filament::section>
        <x-slot name="heading">🏷️ Étape 3 — La Meta Description</x-slot>
        <div class="space-y-4">
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">150 à 160 caractères exactement</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">C'est le texte qui apparaît sous le titre dans Google. Trop court = opportunité manquée. Trop long = coupé.</p>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Contient le mot-clé principal</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Google met en gras le mot-clé dans la description — ça attire l'œil et augmente le taux de clic.</p>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Inclut un appel à l'action</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Terminez par : <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">Découvrez notre guide</code>, <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">Lisez nos conseils</code></p>
            </div>
        </div>
    </x-filament::section>
    </div>

    <div style="margin-top:20px;">
    <x-filament::section>
        <x-slot name="heading">📐 Étape 4 — La structure de l'article</x-slot>
        <div class="space-y-4">
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-2">Structure idéale à respecter</h4>
                <div class="text-sm p-3 rounded bg-gray-100 dark:bg-gray-800 space-y-1">
                    <p><strong>H1</strong> — Titre principal (mot-clé exact) — 1 seul par article</p>
                    <p><strong>Introduction</strong> — 150-200 mots — répondre directement à la question</p>
                    <p><strong>H2</strong> — Partie 1 (contient le mot-clé secondaire)</p>
                    <p class="pl-4"><strong>H3</strong> — Sous-partie</p>
                    <p><strong>H2</strong> — Partie 2</p>
                    <p class="pl-4"><strong>H3</strong> — Sous-partie</p>
                    <p><strong>H2</strong> — Conclusion + CTA vers Netsucess</p>
                </div>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Longueur minimale : 800 mots</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Les articles de 1000 à 2000 mots rankent mieux. Visez au minimum 800 mots.</p>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Mot-clé dans le premier paragraphe</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Mentionnez le mot-clé principal dans les 100 premiers mots de l'article.</p>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Densité du mot-clé : 1 à 2%</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Pour un article de 1000 mots → mentionnez le mot-clé <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">10 à 20 fois</code> maximum.</p>
            </div>
        </div>
    </x-filament::section>
    </div>

    <div style="margin-top:20px;">
    <x-filament::section>
        <x-slot name="heading">🖼️ Étape 5 — L'image à la une</x-slot>
        <div class="space-y-4">
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Format recommandé : 1200 x 630px</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Format optimal pour Google et les réseaux sociaux.</p>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-2">Nom du fichier contient le mot-clé</h4>
                <div class="text-sm p-3 rounded bg-gray-100 dark:bg-gray-800">
                    <p>❌ <code>IMG_20240315.jpg</code></p>
                    <p class="mt-1">✅ <code>lancer-boutique-dropshipping-2026.jpg</code></p>
                </div>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Poids maximum : 200 Ko</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Compressez sur <code class="bg-gray-200 dark:bg-gray-700 px-1 rounded">squoosh.app</code> avant d'uploader.</p>
            </div>
        </div>
    </x-filament::section>
    </div>

    <div style="margin-top:20px;">
    <x-filament::section>
        <x-slot name="heading">🔗 Étape 6 — Le Slug (URL)</x-slot>
        <div class="space-y-4">
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-2">URL courte et lisible</h4>
                <div class="text-sm p-3 rounded bg-gray-100 dark:bg-gray-800">
                    <p>❌ <code>/blog/comment-lancer-une-boutique-e-commerce-rentable-en-2026-guide-complet</code></p>
                    <p class="mt-1">✅ <code>/blog/lancer-boutique-dropshipping-2026</code></p>
                </div>
            </div>
            <div class="p-4 rounded-lg bg-gray-50 dark:bg-gray-900">
                <h4 class="font-semibold mb-1">Contient le mot-clé principal</h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">Le slug est généré automatiquement depuis le titre — vérifiez qu'il contient bien votre mot-clé.</p>
            </div>
        </div>
    </x-filament::section>
    </div>

    {{-- CHECKLIST --}}
    <div style="margin-top:20px;">
    <x-filament::section>
        <x-slot name="heading">✅ Checklist finale avant publication</x-slot>

        <div class="mb-4">
            <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2 mb-2">
                <div id="progressBar" class="bg-primary-600 h-2 rounded-full transition-all duration-300" style="width:0%"></div>
            </div>
            <p class="text-sm text-gray-500"><span id="progressText">0</span> / 15 points cochés</p>
        </div>

        <div class="space-y-2">
            @foreach([
                ['titre', 'Le titre contient le mot-clé principal'],
                ['titre-length', 'Le titre fait entre 50 et 60 caractères'],
                ['titre-cta', 'Le titre donne envie de cliquer (chiffre, année, guide...)'],
                ['meta-desc', 'La meta description est remplie'],
                ['meta-length', 'La meta description fait 150-160 caractères'],
                ['meta-keyword', 'La meta description contient le mot-clé principal'],
                ['excerpt', 'Le résumé court (excerpt) est rempli'],
                ['slug', 'Le slug est court et contient le mot-clé'],
                ['intro', "Le mot-clé apparaît dans les 100 premiers mots"],
                ['structure', "L'article utilise des H2 et H3 correctement"],
                ['longueur', "L'article fait au moins 800 mots"],
                ['image', "Une image à la une est uploadée"],
                ['image-size', "L'image fait 1200x630px et moins de 200 Ko"],
                ['categorie', "Une catégorie est sélectionnée"],
                ['cta', "L'article se termine par un appel à l'action vers Netsucess"],
            ] as [$id, $label])
            <div class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-800 transition-colors">
                <input type="checkbox"
                       id="check-{{ $id }}"
                       onchange="updateProgress()"
                       class="w-4 h-4 accent-primary rounded cursor-pointer flex-shrink-0">
                <label for="check-{{ $id }}" class="text-sm cursor-pointer select-none">{{ $label }}</label>
            </div>
            @endforeach
        </div>
    </x-filament::section>
    </div>

</div>

<script>
function updateProgress() {
    const total = document.querySelectorAll('[id^="check-"]').length;
    const checked = document.querySelectorAll('[id^="check-"]:checked').length;
    const pct = Math.round((checked / total) * 100);
    document.getElementById('progressBar').style.width = pct + '%';
    document.getElementById('progressText').textContent = checked;
}
</script>

</x-filament-panels::page>