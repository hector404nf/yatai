import axios from "axios";
import { ref, watch } from "vue";
import { useRouter } from "vue-router";

export default function usePublicacion() {
    const publicacion = ref('');
    const publicaciones = ref([]);
    const router = useRouter();

    const getPublicaciones = async () => {
        let response = await axios.get('/api/publicacion', {
            params: {
                direccion: 'asc',
                campo: 'id_publicaciones'
            }
        });
        let res = response.data;
        publicaciones.value = res.data;
    };

    return {
        getPublicaciones,
        publicacion,
        publicaciones,
    }
}
