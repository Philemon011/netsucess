<x-filament-panels::page>

    <div class="max-w-6xl mx-auto pb-16">

        {{-- HEADER --}}
        <div class="mb-10">
            <div class="flex items-center gap-3 mb-3">
                <span class="flex items-center justify-center w-10 h-10 rounded-xl bg-primary-100 dark:bg-primary-500/10 text-primary-600 text-lg">
                    ✨
                </span>

                <span class="text-sm font-semibold text-primary-600">
                    BIBLIOTHÈQUE DE PROMPTS
                </span>
            </div>

            <h1 class="text-3xl md:text-4xl font-black tracking-tight text-gray-950 dark:text-white">
                Créer un article SEO de A à Z
            </h1>

            <p class="mt-3 max-w-3xl text-base leading-7 text-gray-600 dark:text-gray-400">
                Utilisez cette série de 9 prompts pour passer de la recherche du mot-clé
                à la rédaction, l'optimisation et la vérification finale de votre article.
            </p>
        </div>


        {{-- WORKFLOW --}}
        <div class="mb-10 overflow-hidden rounded-2xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900">

            <div class="px-5 py-4 border-b border-gray-200 dark:border-gray-800">
                <h2 class="font-bold text-gray-950 dark:text-white">
                    🚀 Workflow recommandé
                </h2>
            </div>

            <div class="p-5 overflow-x-auto">
                <div class="flex items-center min-w-max">

                    @foreach([
                        ['01', 'Mot-clé'],
                        ['02', 'Concurrence'],
                        ['03', 'Structure'],
                        ['04', 'Métadonnées'],
                        ['05', 'Rédaction'],
                        ['06', 'Audit'],
                        ['07', 'Correction'],
                        ['08', 'Image'],
                        ['09', 'Finalisation'],
                    ] as $index => $step)

                        <div class="flex items-center">

                            <div class="flex flex-col items-center gap-2">
                                <div class="w-10 h-10 rounded-full bg-primary-600 text-white flex items-center justify-center text-xs font-bold">
                                    {{ $step[0] }}
                                </div>

                                <span class="text-xs font-medium text-gray-600 dark:text-gray-400">
                                    {{ $step[1] }}
                                </span>
                            </div>

                            @if($index < 8)
                                <div class="w-10 md:w-14 h-px bg-gray-200 dark:bg-gray-700 mx-2 mb-6"></div>
                            @endif

                        </div>

                    @endforeach

                </div>
            </div>
        </div>


        {{-- PROMPTS --}}
        <div class="space-y-6">


            {{-- PROMPT 1 --}}
            <x-filament::section>
                <x-slot name="heading">
                    <div class="flex items-center gap-3">
                        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-primary-100 dark:bg-primary-500/10 text-primary-600 font-bold text-sm">
                            01
                        </span>

                        <div>
                            <div class="font-bold">Définir le sujet et trouver le mot-clé principal</div>
                            <div class="text-xs font-normal text-gray-500 mt-0.5">
                                Recherche et stratégie de mots-clés
                            </div>
                        </div>
                    </div>
                </x-slot>

                <p class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                    Utilisez ce prompt avant toute rédaction afin d'identifier le meilleur mot-clé principal
                    et les mots-clés secondaires.
                </p>

                <div class="relative">
                    <pre id="prompt-1" class="prompt-box"><code>Tu es un expert SEO spécialisé dans la recherche de mots-clés et la stratégie de contenu.

Je veux créer un article de blog pour [NOM DU SITE / ENTREPRISE].

Sujet général :
[SUJET]

Audience cible :
[TYPE DE PERSONNES]

Objectif de l'article :
[INFORMER / ATTIRER DES CLIENTS / VENDRE UN SERVICE / GÉNÉRER DES LEADS]

Ta mission est de déterminer le meilleur mot-clé principal à cibler.

Analyse le sujet et propose :

1. 5 à 10 mots-clés principaux potentiels.
2. Pour chacun :
   - intention de recherche
   - niveau de précision
   - potentiel SEO
   - potentiel commercial
   - difficulté estimée
3. Sélectionne UN seul mot-clé principal.
4. Donne 3 à 5 mots-clés secondaires pertinents.
5. Donne également :
   - synonymes
   - variantes longues traînes
   - questions que les internautes pourraient poser sur ce sujet
   - termes sémantiquement liés à intégrer naturellement dans l'article.

IMPORTANT :
- Ne choisis pas un mot-clé uniquement parce qu'il semble populaire.
- Privilégie un mot-clé avec une vraie intention de recherche.
- Le mot-clé doit être suffisamment précis pour permettre de produire un article répondant clairement à l'intention de l'utilisateur.
- Ne force jamais les mots-clés.

Présente le résultat sous cette structure :

MOT-CLÉ PRINCIPAL :
[...]

INTENTION DE RECHERCHE :
[...]

MOTS-CLÉS SECONDAIRES :
1.
2.
3.
4.
5.

VARIANTES :
[...]

QUESTIONS À TRAITER :
[...]

CHAMP SÉMANTIQUE :
[...]

JUSTIFICATION DU CHOIX :
[...]</code></pre>

                    <button type="button"
                            onclick="copyPrompt('prompt-1', this)"
                            class="copy-btn">
                        <span>📋</span>
                        <span>Copier le prompt</span>
                    </button>
                </div>
            </x-filament::section>


            {{-- PROMPT 2 --}}
            <x-filament::section>
                <x-slot name="heading">
                    <div class="flex items-center gap-3">
                        <span class="step-number">02</span>

                        <div>
                            <div class="font-bold">Analyser les concurrents Google</div>
                            <div class="text-xs font-normal text-gray-500 mt-0.5">
                                Analyse SERP et opportunités SEO
                            </div>
                        </div>
                    </div>
                </x-slot>

                <p class="prompt-description">
                    Analysez les premiers résultats Google pour comprendre leurs forces,
                    leurs faiblesses et trouver un angle éditorial plus intéressant.
                </p>

                <div class="relative">
                    <pre id="prompt-2" class="prompt-box"><code>Tu es un consultant SEO senior spécialisé dans l'analyse des SERP et la création de contenus capables de dépasser les résultats concurrents.

Mot-clé principal :
[MOT-CLÉ]

Voici les résultats actuellement positionnés dans Google :

CONCURRENT 1 :
[TITRE + CONTENU / URL / TEXTE]

CONCURRENT 2 :
[TITRE + CONTENU / URL / TEXTE]

CONCURRENT 3 :
[TITRE + CONTENU / URL / TEXTE]

CONCURRENT 4 :
[TITRE + CONTENU / URL / TEXTE]

CONCURRENT 5 :
[TITRE + CONTENU / URL / TEXTE]

Analyse-les en profondeur.

Identifie :

1. Les sujets traités par tous les concurrents.
2. Les sujets traités uniquement par certains concurrents.
3. Les questions auxquelles ils répondent mal.
4. Les informations importantes qu'ils oublient.
5. Les passages trop superficiels.
6. Les angles intéressants que nous pouvons améliorer.
7. Les objections ou problèmes des utilisateurs qui ne sont pas suffisamment traités.
8. Les éléments qui pourraient apporter davantage de valeur.
9. Les opportunités de différenciation.
10. Les éventuelles informations obsolètes.

Puis construis une stratégie pour créer un article clairement meilleur.

Je veux que notre article soit :
- plus utile
- plus clair
- plus concret
- plus complet
- plus facile à lire
- mieux structuré
- orienté vers l'intention de recherche
- naturel et humain

Ne propose pas de bourrage de mots-clés.

Termine par :

"ANGLE ÉDITORIAL RECOMMANDÉ"

et explique exactement sous quel angle notre article doit être construit pour apporter plus de valeur que les concurrents.</code></pre>

                    <button type="button"
                            onclick="copyPrompt('prompt-2', this)"
                            class="copy-btn">
                        📋 <span>Copier le prompt</span>
                    </button>
                </div>
            </x-filament::section>


            {{-- PROMPT 3 --}}
            <x-filament::section>
                <x-slot name="heading">
                    <div class="flex items-center gap-3">
                        <span class="step-number">03</span>

                        <div>
                            <div class="font-bold">Construire le plan SEO</div>
                            <div class="text-xs font-normal text-gray-500 mt-0.5">
                                Architecture H1, H2 et H3
                            </div>
                        </div>
                    </div>
                </x-slot>

                <p class="prompt-description">
                    Construisez le plan complet de l'article avant de passer à la rédaction.
                </p>

                <div class="relative">
                    <pre id="prompt-3" class="prompt-box"><code>Tu es un expert SEO et rédacteur web senior.

Nous allons rédiger un article optimisé pour Google mais avant toute rédaction, nous devons construire sa structure.

MOT-CLÉ PRINCIPAL :
[MOT-CLÉ]

MOTS-CLÉS SECONDAIRES :
[LISTE]

INTENTION DE RECHERCHE :
[INTENTION]

ANGLE ÉDITORIAL :
[ANGLE]

QUESTIONS À TRAITER :
[QUESTIONS]

Analyse concurrentielle :
[COLLER LE RÉSULTAT DU PROMPT 2]

Construis un plan d'article SEO complet.

Contraintes :

- 1 seul H1.
- H1 contenant le mot-clé principal.
- Introduction de 150 à 200 mots.
- Le mot-clé principal doit apparaître dans les 100 premiers mots.
- Utiliser des H2 et H3 de manière logique.
- Chaque H2 doit avoir une fonction précise.
- Utiliser les mots-clés secondaires naturellement.
- Répondre aux principales questions liées à l'intention de recherche.
- Prévoir au minimum 800 mots.
- Viser idéalement 1 200 à 1 800 mots si le sujet le justifie.
- Prévoir une conclusion.
- Prévoir un CTA final vers [NOM DE L'ENTREPRISE].
- Éviter les titres artificiels uniquement conçus pour placer des mots-clés.

Pour chaque section, indique :
- H2/H3
- objectif de la section
- points à traiter
- mot-clé ou terme sémantique à intégrer éventuellement
- longueur approximative

Ne rédige PAS encore l'article.

Je veux uniquement le plan détaillé.</code></pre>

                    <button type="button"
                            onclick="copyPrompt('prompt-3', this)"
                            class="copy-btn">
                        📋 <span>Copier le prompt</span>
                    </button>
                </div>
            </x-filament::section>


            {{-- PROMPT 4 --}}
            <x-filament::section>
                <x-slot name="heading">
                    <div class="flex items-center gap-3">
                        <span class="step-number">04</span>

                        <div>
                            <div class="font-bold">Générer le titre, Meta, Excerpt et Slug</div>
                            <div class="text-xs font-normal text-gray-500 mt-0.5">
                                Optimisation SEO On-Page
                            </div>
                        </div>
                    </div>
                </x-slot>

                <p class="prompt-description">
                    Générez tous les éléments nécessaires à la publication de l'article dans votre CMS.
                </p>

                <div class="relative">
                    <pre id="prompt-4" class="prompt-box"><code>Tu es un expert SEO spécialisé dans les titres, métadonnées et optimisation du CTR.

Mot-clé principal :
[MOT-CLÉ]

Sujet :
[SUJET]

Plan de l'article :
[COLLER LE PLAN]

Génère les éléments suivants.

### 1. H1

Crée un H1 :
- contenant le mot-clé principal dès le début si possible
- naturel
- attractif
- clair
- orienté utilisateur
- entre 50 et 60 caractères si possible
- avec un élément incitatif comme une année, un chiffre, "guide", "étape par étape", etc. uniquement si cela reste naturel.

### 2. Meta title

Crée un meta title optimisé SEO et CTR.

Contraintes :
- environ 50 à 60 caractères
- mot-clé principal présent
- naturel
- attractif

### 3. Meta description

Crée une meta description.

Contraintes :
- entre 150 et 160 caractères
- mot-clé principal présent
- résumé clair de la valeur de l'article
- appel à l'action naturel à la fin

### 4. Excerpt

Crée un résumé court de l'article :
- 2 à 3 phrases maximum
- clair
- naturel
- donnant envie de lire
- sans répétition artificielle du mot-clé.

### 5. Slug

Crée un slug :
- court
- lisible
- sans mots inutiles
- contenant le mot-clé principal sous forme adaptée à une URL
- sans accents
- avec des tirets.

Présente le résultat exactement ainsi :

H1 :
[...]

META TITLE :
[...]

META DESCRIPTION :
[...]

EXCERPT :
[...]

SLUG :
[...]</code></pre>

                    <button type="button"
                            onclick="copyPrompt('prompt-4', this)"
                            class="copy-btn">
                        📋 <span>Copier le prompt</span>
                    </button>
                </div>
            </x-filament::section>


            {{-- PROMPT 5 --}}
            <x-filament::section>
                <x-slot name="heading">
                    <div class="flex items-center gap-3">
                        <span class="step-number">05</span>

                        <div>
                            <div class="font-bold">Rédiger l'article complet</div>
                            <div class="text-xs font-normal text-gray-500 mt-0.5">
                                Production du contenu
                            </div>
                        </div>
                    </div>
                </x-slot>

                <p class="prompt-description">
                    Utilisez toutes les informations préparées précédemment pour générer l'article final.
                </p>

                <div class="relative">
                    <pre id="prompt-5" class="prompt-box"><code>Tu es un rédacteur web SEO senior, spécialisé dans les contenus naturels, utiles et réellement destinés aux lecteurs.

Tu dois maintenant rédiger l'article complet à partir des informations suivantes.

MOT-CLÉ PRINCIPAL :
[MOT-CLÉ]

MOTS-CLÉS SECONDAIRES :
[LISTE]

H1 :
[TITRE]

INTENTION DE RECHERCHE :
[INTENTION]

ANGLE :
[ANGLE]

PLAN VALIDÉ :
[COLLER LE PLAN DU PROMPT 3]

OBJECTIF BUSINESS :
[OBJECTIF]

MARQUE :
[NOM DE LA MARQUE]

Rédige un article d'au moins 800 mots.

OBJECTIFS SEO :

- Le mot-clé principal doit apparaître naturellement dans les 100 premiers mots.
- Utilise le mot-clé principal de manière naturelle tout au long du texte.
- Évite absolument le keyword stuffing.
- Utilise les mots-clés secondaires uniquement lorsqu'ils sont pertinents.
- Utilise des synonymes et le champ lexical du sujet.
- Respecte strictement la hiérarchie H1 > H2 > H3.
- Il ne doit y avoir qu'un seul H1.
- Réponds directement à l'intention de recherche.
- Apporte des informations concrètes.
- Donne des exemples lorsque cela améliore la compréhension.
- Évite les paragraphes inutilement longs.

STYLE :

- Français naturel.
- Ton humain, professionnel et accessible.
- Pas de phrases génériques ou artificielles.
- Pas de répétitions.
- Pas de remplissage.
- Pas de formulation typique d'une IA.
- Évite les introductions du type "Dans le monde actuel..." ou "De nos jours...".
- Privilégie des phrases claires et directes.
- Utilise des listes uniquement lorsqu'elles améliorent réellement la lisibilité.
- Ne cherche pas à placer un mot-clé lorsqu'il n'a pas sa place.

INTRODUCTION :

150 à 200 mots environ.

Elle doit :
1. identifier immédiatement le problème ou besoin du lecteur ;
2. introduire naturellement le mot-clé principal ;
3. expliquer ce que le lecteur va apprendre ;
4. donner envie de poursuivre.

CORPS DE L'ARTICLE :

Respecte exactement le plan validé.

CONCLUSION :

Résume brièvement les idées essentielles sans répéter inutilement l'article.

CTA :

Termine par un appel à l'action naturel vers [NOM DE LA MARQUE].

Le CTA doit être cohérent avec le sujet et ne doit pas ressembler à une publicité agressive.

IMPORTANT :

Ne crée aucune statistique, étude, chiffre, citation ou affirmation factuelle précise si elle n'a pas été fournie ou vérifiée.

Rédige maintenant uniquement l'article final.</code></pre>

                    <button type="button"
                            onclick="copyPrompt('prompt-5', this)"
                            class="copy-btn">
                        📋 <span>Copier le prompt</span>
                    </button>
                </div>
            </x-filament::section>


            {{-- PROMPT 6 --}}
            <x-filament::section>
                <x-slot name="heading">
                    <div class="flex items-center gap-3">
                        <span class="step-number">06</span>

                        <div>
                            <div class="font-bold">Effectuer l'audit SEO</div>
                            <div class="text-xs font-normal text-gray-500 mt-0.5">
                                Contrôle qualité
                            </div>
                        </div>
                    </div>
                </x-slot>

                <p class="prompt-description">
                    Ne publiez pas immédiatement. Faites passer l'article dans cet audit avant de le corriger.
                </p>

                <div class="relative">
                    <pre id="prompt-6" class="prompt-box"><code>Tu es maintenant un auditeur SEO extrêmement strict.

Analyse l'article ci-dessous comme s'il allait être publié immédiatement.

MOT-CLÉ PRINCIPAL :
[MOT-CLÉ]

H1 :
[TITRE]

META DESCRIPTION :
[META]

SLUG :
[SLUG]

EXCERPT :
[EXCERPT]

ARTICLE :
[ARTICLE COMPLET]

Vérifie précisément les 15 critères suivants :

1. Le titre contient le mot-clé principal.
2. Le titre fait entre 50 et 60 caractères.
3. Le titre donne envie de cliquer.
4. La meta description est remplie.
5. La meta description fait entre 150 et 160 caractères.
6. La meta description contient le mot-clé principal.
7. L'excerpt est rempli.
8. Le slug est court et contient le mot-clé.
9. Le mot-clé apparaît dans les 100 premiers mots.
10. La structure H1/H2/H3 est correcte.
11. L'article fait au moins 800 mots.
12. Une image à la une est prévue.
13. L'image respecte 1200 × 630 px et moins de 200 Ko.
14. Une catégorie pertinente peut être sélectionnée.
15. L'article se termine par un CTA vers [NOM DE LA MARQUE].

Pour chaque critère, indique :

✅ VALIDÉ
ou
❌ À CORRIGER

Puis donne :
- nombre total de critères validés
- nombre de critères à corriger
- problèmes détectés
- corrections précises à effectuer

Vérifie également :

- répétitions excessives
- keyword stuffing
- phrases artificielles
- paragraphes trop longs
- H2/H3 mal structurés
- manque d'informations
- manque d'exemples
- introduction faible
- conclusion faible
- CTA trop commercial
- incohérences
- affirmations non justifiées

Ne réécris pas encore tout l'article.

Fais uniquement l'AUDIT.</code></pre>

                    <button type="button"
                            onclick="copyPrompt('prompt-6', this)"
                            class="copy-btn">
                        📋 <span>Copier le prompt</span>
                    </button>
                </div>
            </x-filament::section>


            {{-- PROMPT 7 --}}
            <x-filament::section>
                <x-slot name="heading">
                    <div class="flex items-center gap-3">
                        <span class="step-number">07</span>

                        <div>
                            <div class="font-bold">Corriger et améliorer l'article</div>
                            <div class="text-xs font-normal text-gray-500 mt-0.5">
                                Optimisation finale
                            </div>
                        </div>
                    </div>
                </x-slot>

                <p class="prompt-description">
                    Corrigez uniquement les problèmes détectés lors de l'audit tout en conservant un style humain.
                </p>

                <div class="relative">
                    <pre id="prompt-7" class="prompt-box"><code>À partir de l'audit SEO ci-dessous, corrige l'article.

ARTICLE ORIGINAL :
[ARTICLE]

AUDIT SEO :
[RÉSULTAT DU PROMPT 6]

MOT-CLÉ PRINCIPAL :
[MOT-CLÉ]

Effectue toutes les corrections nécessaires.

OBJECTIF :

Obtenir un article qui valide les 15 critères SEO suivants :

- titre optimisé
- longueur du titre correcte
- titre attractif
- meta description correcte
- longueur meta correcte
- mot-clé présent dans la meta
- excerpt présent
- slug optimisé
- mot-clé dans les 100 premiers mots
- structure H1/H2/H3 correcte
- minimum 800 mots
- image à la une prévue
- image 1200 × 630 px et moins de 200 Ko
- catégorie pertinente
- CTA final vers [NOM DE LA MARQUE]

Améliore également :
- fluidité
- lisibilité
- naturel
- précision
- valeur apportée au lecteur
- cohérence
- qualité rédactionnelle.

Ne transforme pas l'article en texte artificiellement optimisé.

Le lecteur doit toujours passer avant Google.

Retourne la VERSION FINALE complète avec :

H1 :
[...]

META TITLE :
[...]

META DESCRIPTION :
[...]

EXCERPT :
[...]

SLUG :
[...]

CATÉGORIE :
[...]

ARTICLE :
[...]

CTA :
[...]

Ne donne aucune explication supplémentaire.</code></pre>

                    <button type="button"
                            onclick="copyPrompt('prompt-7', this)"
                            class="copy-btn">
                        📋 <span>Copier le prompt</span>
                    </button>
                </div>
            </x-filament::section>


            {{-- PROMPT 8 --}}
            <x-filament::section>
                <x-slot name="heading">
                    <div class="flex items-center gap-3">
                        <span class="step-number">08</span>

                        <div>
                            <div class="font-bold">Générer l'image à la une</div>
                            <div class="text-xs font-normal text-gray-500 mt-0.5">
                                Direction artistique et visuel SEO
                            </div>
                        </div>
                    </div>
                </x-slot>

                <p class="prompt-description">
                    Créez un brief précis pour générer une image éditoriale adaptée à l'article.
                </p>

                <div class="relative">
                    <pre id="prompt-8" class="prompt-box"><code>Crée une image à la une professionnelle pour un article de blog SEO.

SUJET DE L'ARTICLE :
[SUJET]

MOT-CLÉ PRINCIPAL :
[MOT-CLÉ]

ANGLE DE L'ARTICLE :
[ANGLE]

PUBLIC CIBLE :
[AUDIENCE]

Direction artistique :

- image éditoriale professionnelle
- moderne
- premium
- claire
- crédible
- visuellement immédiatement compréhensible
- composition adaptée à une miniature d'article de blog
- hiérarchie visuelle forte
- espace négatif suffisant
- aucun élément inutile
- rendu réaliste / éditorial selon le sujet
- éviter les clichés visuels génériques de l'IA
- éviter les compositions surchargées
- éviter les textes générés dans l'image sauf demande explicite

Format exact :
1200 × 630 px

L'image doit pouvoir être utilisée comme image à la une d'un article et sur les réseaux sociaux.

Nom de fichier recommandé :
[SLUG OU MOT-CLÉ PRINCIPAL]-2026.jpg

Ne mets pas de logo ou de texte dans l'image sauf si cela est explicitement demandé.</code></pre>

                    <button type="button"
                            onclick="copyPrompt('prompt-8', this)"
                            class="copy-btn">
                        📋 <span>Copier le prompt</span>
                    </button>
                </div>
            </x-filament::section>


            {{-- PROMPT 9 --}}
            <x-filament::section>
                <x-slot name="heading">
                    <div class="flex items-center gap-3">
                        <span class="step-number">09</span>

                        <div>
                            <div class="font-bold">Contrôle final avant publication</div>
                            <div class="text-xs font-normal text-gray-500 mt-0.5">
                                Validation finale
                            </div>
                        </div>
                    </div>
                </x-slot>

                <p class="prompt-description">
                    Dernier contrôle avant de publier l'article.
                </p>

                <div class="relative">
                    <pre id="prompt-9" class="prompt-box"><code>Agis comme un responsable éditorial SEO avant publication.

Voici mon article final :

[METS TOUT LE CONTENU]

Effectue une dernière vérification extrêmement stricte.

Je veux un tableau :

| Critère | Statut | Problème | Correction |
|---|---|---|---|

Vérifie les 15 critères :

1. H1 contient le mot-clé principal
2. H1 entre 50 et 60 caractères
3. H1 attractif
4. Meta description présente
5. Meta description 150-160 caractères
6. Mot-clé présent dans la meta description
7. Excerpt présent
8. Slug court et optimisé
9. Mot-clé dans les 100 premiers mots
10. H1/H2/H3 correctement structurés
11. Minimum 800 mots
12. Image à la une présente
13. Image 1200×630 et <200 Ko
14. Catégorie sélectionnée
15. CTA vers [NOM DE LA MARQUE]

Puis vérifie également :

- orthographe
- grammaire
- répétitions
- qualité des transitions
- lisibilité
- intention de recherche
- naturel du texte
- crédibilité
- cohérence
- absence de keyword stuffing
- qualité du CTA

À la fin, donne uniquement :

SCORE : X/15

PUBLICATION :
🟢 PRÊT À PUBLIER
ou
🔴 NE PAS PUBLIER

Si le résultat est 🔴, liste uniquement les corrections indispensables.</code></pre>

                    <button type="button"
                            onclick="copyPrompt('prompt-9', this)"
                            class="copy-btn">
                        📋 <span>Copier le prompt</span>
                    </button>
                </div>
            </x-filament::section>


            {{-- COPY ALL --}}
            <div class="rounded-2xl border border-primary-200 dark:border-primary-900 bg-primary-50 dark:bg-primary-950/20 p-6">

                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5">

                    <div>
                        <h3 class="font-bold text-lg text-gray-950 dark:text-white">
                            📋 Tous les prompts au même endroit
                        </h3>

                        <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                            Copiez les 9 prompts en une seule fois.
                        </p>
                    </div>

                    <button type="button"
                            onclick="copyAllPrompts(this)"
                            class="copy-all-btn">
                        📋 Copier les 9 prompts
                    </button>

                </div>

            </div>


            {{-- CHECKLIST --}}
            <x-filament::section>

                <x-slot name="heading">
                    <div class="flex items-center gap-3">
                        <span class="flex items-center justify-center w-9 h-9 rounded-lg bg-success-100 dark:bg-success-500/10 text-success-600 font-bold">
                            ✓
                        </span>

                        <div>
                            <div class="font-bold">Checklist finale avant publication</div>
                            <div class="text-xs font-normal text-gray-500 mt-0.5">
                                Vérifiez chaque élément avant de publier
                            </div>
                        </div>
                    </div>
                </x-slot>


                {{-- PROGRESS --}}
                <div class="mb-6">

                    <div class="flex justify-between items-center mb-2">
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-400">
                            Progression
                        </span>

                        <span class="text-sm font-bold text-primary-600">
                            <span id="progressText">0</span> / 15
                        </span>
                    </div>

                    <div class="w-full h-2.5 bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                        <div id="progressBar"
                             class="h-full bg-primary-600 rounded-full transition-all duration-300"
                             style="width:0%">
                        </div>
                    </div>

                </div>


                {{-- CHECKBOXES --}}
                <div class="space-y-1">

                    @foreach([
                        ['titre', 'Le titre contient le mot-clé principal'],
                        ['titre-length', 'Le titre fait entre 50 et 60 caractères'],
                        ['titre-cta', 'Le titre donne envie de cliquer'],
                        ['meta-desc', 'La meta description est remplie'],
                        ['meta-length', 'La meta description fait 150-160 caractères'],
                        ['meta-keyword', 'La meta description contient le mot-clé principal'],
                        ['excerpt', 'Le résumé court (excerpt) est rempli'],
                        ['slug', 'Le slug est court et contient le mot-clé'],
                        ['intro', 'Le mot-clé apparaît dans les 100 premiers mots'],
                        ['structure', 'L’article utilise correctement les H2 et H3'],
                        ['longueur', 'L’article fait au moins 800 mots'],
                        ['image', 'Une image à la une est uploadée'],
                        ['image-size', 'L’image fait 1200×630 px et moins de 200 Ko'],
                        ['categorie', 'Une catégorie est sélectionnée'],
                        ['cta', 'L’article se termine par un CTA vers Netsucess'],
                    ] as [$id, $label])

                        <label class="check-item">

                            <input type="checkbox"
                                   id="check-{{ $id }}"
                                   onchange="updateProgress()"
                                   class="check-input">

                            <span class="check-custom"></span>

                            <span class="text-sm text-gray-700 dark:text-gray-300">
                                {{ $label }}
                            </span>

                        </label>

                    @endforeach

                </div>

            </x-filament::section>

        </div>

    </div>


    {{-- STYLES --}}
    <style>

        .step-number {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: rgb(239 246 255);
            color: rgb(37 99 235);
            font-size: 13px;
            font-weight: 800;
            flex-shrink: 0;
        }

        .dark .step-number {
            background: rgb(37 99 235 / 0.12);
            color: rgb(96 165 250);
        }

        .prompt-description {
            font-size: 14px;
            line-height: 1.6;
            color: rgb(107 114 128);
            margin-bottom: 16px;
        }

        .dark .prompt-description {
            color: rgb(156 163 175);
        }

        .prompt-box {
            position: relative;
            width: 100%;
            max-height: 560px;
            overflow: auto;
            padding: 22px;
            padding-right: 150px;
            border-radius: 12px;
            background: rgb(17 24 39);
            color: rgb(229 231 235);
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            font-size: 13px;
            line-height: 1.7;
            white-space: pre-wrap;
            word-break: break-word;
            border: 1px solid rgb(55 65 81);
        }

        .prompt-box::-webkit-scrollbar {
            width: 7px;
            height: 7px;
        }

        .prompt-box::-webkit-scrollbar-track {
            background: transparent;
        }

        .prompt-box::-webkit-scrollbar-thumb {
            background: rgb(75 85 99);
            border-radius: 10px;
        }

        .copy-btn {
            position: absolute;
            top: 12px;
            right: 12px;
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 8px 12px;
            border-radius: 8px;
            background: rgb(255 255 255 / 0.10);
            color: white;
            font-size: 12px;
            font-weight: 600;
            border: 1px solid rgb(255 255 255 / 0.10);
            cursor: pointer;
            backdrop-filter: blur(8px);
            transition: all .2s ease;
        }

        .copy-btn:hover {
            background: rgb(255 255 255 / 0.18);
            transform: translateY(-1px);
        }

        .copy-btn.copied {
            background: rgb(22 163 74);
            border-color: rgb(22 163 74);
        }

        .copy-all-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 11px 17px;
            border-radius: 9px;
            background: rgb(37 99 235);
            color: white;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: all .2s ease;
            white-space: nowrap;
        }

        .copy-all-btn:hover {
            transform: translateY(-1px);
            filter: brightness(1.05);
        }

        .copy-all-btn.copied {
            background: rgb(22 163 74);
        }

        .check-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 12px;
            border-radius: 9px;
            cursor: pointer;
            transition: background .2s ease;
        }

        .check-item:hover {
            background: rgb(249 250 251);
        }

        .dark .check-item:hover {
            background: rgb(31 41 55);
        }

        .check-input {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }

        .check-custom {
            width: 20px;
            height: 20px;
            border: 1.5px solid rgb(209 213 219);
            border-radius: 6px;
            flex-shrink: 0;
            position: relative;
            transition: all .2s ease;
        }

        .dark .check-custom {
            border-color: rgb(75 85 99);
        }

        .check-input:checked + .check-custom {
            background: rgb(37 99 235);
            border-color: rgb(37 99 235);
        }

        .check-input:checked + .check-custom::after {
            content: "✓";
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 13px;
            font-weight: 800;
        }

        .check-input:checked ~ span:last-child {
            color: rgb(107 114 128);
            text-decoration: line-through;
        }

        @media (max-width: 640px) {

            .prompt-box {
                padding: 16px;
                padding-right: 16px;
                padding-top: 55px;
                font-size: 12px;
            }

            .copy-btn {
                top: 10px;
                left: 10px;
                right: auto;
            }

        }

    </style>


    {{-- JAVASCRIPT --}}
    <script>

        function getPromptText(id) {
            const element = document.getElementById(id);

            if (!element) {
                return '';
            }

            return element.innerText.trim();
        }


        async function copyPrompt(id, button) {

            const text = getPromptText(id);

            if (!text) {
                return;
            }

            try {

                await navigator.clipboard.writeText(text);

                const original = button.innerHTML;

                button.classList.add('copied');
                button.innerHTML = '✓ <span>Copié !</span>';

                setTimeout(() => {
                    button.classList.remove('copied');
                    button.innerHTML = original;
                }, 1800);

            } catch (error) {

                const textarea = document.createElement('textarea');

                textarea.value = text;
                textarea.style.position = 'fixed';
                textarea.style.opacity = '0';

                document.body.appendChild(textarea);

                textarea.select();

                document.execCommand('copy');

                textarea.remove();

                const original = button.innerHTML;

                button.classList.add('copied');
                button.innerHTML = '✓ <span>Copié !</span>';

                setTimeout(() => {
                    button.classList.remove('copied');
                    button.innerHTML = original;
                }, 1800);
            }
        }


        async function copyAllPrompts(button) {

            const prompts = [];

            for (let i = 1; i <= 9; i++) {

                const text = getPromptText('prompt-' + i);

                if (text) {

                    prompts.push(
                        '========================================\n' +
                        'PROMPT ' + String(i).padStart(2, '0') + '\n' +
                        '========================================\n\n' +
                        text
                    );

                }

            }

            const finalText = prompts.join('\n\n\n');


            try {

                await navigator.clipboard.writeText(finalText);

            } catch (error) {

                const textarea = document.createElement('textarea');

                textarea.value = finalText;
                textarea.style.position = 'fixed';
                textarea.style.opacity = '0';

                document.body.appendChild(textarea);

                textarea.select();

                document.execCommand('copy');

                textarea.remove();
            }


            const original = button.innerHTML;

            button.classList.add('copied');
            button.innerHTML = '✓ Tous les prompts sont copiés';

            setTimeout(() => {

                button.classList.remove('copied');
                button.innerHTML = original;

            }, 2200);

        }


        function updateProgress() {

            const checkboxes = document.querySelectorAll(
                '[id^="check-"]'
            );

            const checked = document.querySelectorAll(
                '[id^="check-"]:checked'
            );

            const total = checkboxes.length;

            const count = checked.length;

            const percentage = total > 0
                ? Math.round((count / total) * 100)
                : 0;

            const progressBar = document.getElementById('progressBar');
            const progressText = document.getElementById('progressText');

            if (progressBar) {
                progressBar.style.width = percentage + '%';
            }

            if (progressText) {
                progressText.textContent = count;
            }

        }

    </script>

</x-filament-panels::page>