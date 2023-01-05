<template>
    <div>
        <h2 class="text-center">Articles List</h2>
        <!--<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>code</th>
                    <th>nom</th>
                    <th>description</th>
                    <th>quantite</th>
                    <th>Actions</th>
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
        </table>-->
        <el-table 
            v-loading="loading"
            element-loading-text="Loading..."
            element-loading-spinner="el-icon-loading"
            element-loading-background="rgba(0, 0, 0, 0.8)"
            :data="articles" height="250" style="width: 100%">
            <el-table-column prop="id" label="ID" width="180">
            </el-table-column>
            <el-table-column prop="code" label="Code" width="180">
            </el-table-column>
            <el-table-column prop="nom" label="Nom" width="180">
            </el-table-column>
            <el-table-column prop="description" label="Description">
            </el-table-column>
            <el-table-column prop="quantité" label="Quantite">
            </el-table-column>
            <el-table-column prop="image" label="Image">
            </el-table-column>
        </el-table>    
    </div>
</template>

<script>
export default {
    data() {
        return {
            articles: [],
            loading: false
        }
    },
    created() {
        this.loading = true
        this.axios.get('http://localhost:8000/api/articles').then(response => {
            this.articles = response.data;
            this.loading = false
        });
    }
} 
</script>