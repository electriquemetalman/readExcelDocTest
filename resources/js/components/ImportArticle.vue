<template>
    <div>
        <h3 class="text-center">Import Articles</h3>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label href="" class="btn btn-primary" style="margin:5px">Upload file <i class="el-icon-upload el-icon-right"></i>
                            <input style="display:none" type="file" name="file" @change="excelFileSelected" class="btn btn-denger" />
                        </label>
                    </div>
                    <el-button type="primary" :loading=loading style="margin:5px" @click.prevent="importArticle">Import file <i class="el-icon-document-add"></i></el-button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return { 
            selectedFile: null,
            loading: false,
            fileList: null
        }
    },
    methods: {
        excelFileSelected(event) {
            this.selectedFile = event.target.files[0]   
        },
        
        importArticle() {
            this.loading = true;
            let fd = new FormData(); 
            fd.append('file', this.selectedFile, this.selectedFile.name);
            this.axios.post('http://localhost:8000/api/article/import', fd).then(response => (this.$router.push({ name: 'home' })))
                .catch(err => console.log(err))
                .finally(() => this.loadin = false)
        }
    }
} 
</script>