<template>
    <div>
        <h3 class="text-center">Import Articles</h3>
        <div class="row">
            <!--<div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label href="" class="btn btn-primary" style="margin:5px">Upload file <i class="el-icon-upload el-icon-right"></i>
                            <input style="display:none" type="file" name="file" @change="excelFileSelected" class="btn btn-denger" />
                        </label>
                    </div>
                    <el-button type="primary" :loading=loading style="margin:5px" @click.prevent="importArticle">Import file <i class="el-icon-document-add"></i></el-button>
                </form>
            </div>-->
            <div class="col-md-6">
                <el-upload class="upload-demo" drag ref="upload" accept="xlsx" action="http://localhost:8000/api/article/import" :auto-upload="false">
                    <i class="el-icon-upload"></i>
                    <div class="el-upload__text">Déposer le fichiers ici ou<em>cliquez pour envoyer</em></div>
                    <div class="el-upload__tip" slot="tip">Fichiers xlsx</div>
                </el-upload>
                <el-button type="success" :loading=loading @click="submitUpload">Import File <i class="el-icon-document-add"></i></el-button>
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
            Notifiad: null,
            showIcon: false
        }
    },
    methods: {
        open() {
            this.$notify.success({
                title: 'Success',
                message: 'Ceci est un message de succès',
                offset: 100
            });
        },
        excelFileSelected(event) {
            this.selectedFile = event.target.files[0]   
        },
        
        importArticle() {
            this.loading = true;
            let fd = new FormData(); 
            fd.append('file', this.selectedFile, this.selectedFile.name);
            this.axios.post('http://localhost:8000/api/article/import', fd).then(response => (this.$router.push({ name: 'home' }), this.$notify.success({
                title: 'Success',
                message: 'le fichier '+this.selectedFile.name+' a ete importer avec succes',
                offset: 100
            }) ))
                .catch(err => console.log(err))
                .finally(() => this.loadin = false)
        },
        submitUpload() {
            this.loading = true;
            this.$refs.upload.submit();
            this.loading = false;
            this.$router.push({ name: 'home' })
            this.$notify.success({
                title: 'Success',
                message: 'le fichier ' + this.name + ' a ete importer avec succes',
                offset: 100
            })
        }
    }
} 
</script>