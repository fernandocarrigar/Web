using System.ComponentModel.DataAnnotations;

namespace WebApplication1.Models.ViewModels
{
    public class MarcasViewModels : ArchivosViewModels
    {
        [Display(Name = "Id de las Marcas")]
        public int? IdMarca { get; set; }

        [Display(Name = "Nombre de la marca")]
        public string? NombreMarca { get; set; }

        [Display(Name = "Id del archivo")]
        public int? IdArchivo { get; set; }
    }
}
