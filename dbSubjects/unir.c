#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#define TAM_COD 70
#define TAM_COM 200

int main(int argc, char const *argv[]){
    if(argc < 4) return 1;
    
    const char *src, *com, *ret;
    char coding[TAM_COD];
    char comentario[TAM_COM];
    char *ret_cod, *ret_com;
    
    src = argv[1];
    com = argv[2];
    ret = argv[3];

    FILE *src_f, *com_f, *ret_f;

    src_f = fopen(src, "r");
    if(src_f) printf("ok, codigos em: %s\n", src);
    else return 2;

    com_f = fopen(com, "r");
    if(src_f) printf("ok, comentarios em: %s\n", com);
    else return 3;

    ret_f = fopen(ret, "w");
    if(ret_f) printf("ok, saida em: %s\n", ret);

    do{
        ret_cod = fgets(coding, TAM_COD, src_f);
        ret_com = fgets(comentario, TAM_COM, com_f);
        if(ret_cod) fprintf(ret_f, "%s", coding);
        if(ret_com) fprintf(ret_f, "\t# %s", comentario);
        fprintf(ret_f, "\n");
    }while (ret_cod > 0 || ret_com > 0);
    
    


    fclose(src_f);
    fclose(com_f);
    fclose(ret_f);    
    return 0;
}

