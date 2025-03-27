<!-- Formulaire d'ajout de catégorie -->
    <div class="card ">
        <div class="card-header">Ajouter une Nouvelle Catégorie</div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                <div class="c1">
                    <label for="nom" class="form-label">Nom de la Catégorie</label>
                    <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="c1">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </div>
    </div> 