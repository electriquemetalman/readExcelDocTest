<template>
    <div>
        <h2 class="text-center">Articles List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>nom</th>
                    <th>description</th>
                    <th>quantite</th>
                    <!--<th>Actions</th>-->
                </tr>
            </thead>
            <tbody>
                <tr v-for="article in articles">
                    <td>{{ article.id }}</td>
                    <td>{{ article.code }}</td>
                    <td>{{ article.nom }}</td>
                    <td>{{ article.description }}</td>
                    <td>{{ article.quantité }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return { articles: [] }
    },
    created() {
        this.axios.get('http://localhost:8000/api/articles').then(response => {
            this.articles = response.data;
        });
    }
} 
</script>