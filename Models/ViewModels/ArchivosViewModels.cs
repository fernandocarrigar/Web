using System.ComponentModel.DataAnnotations;
using System.Xml.Linq;

namespace WebApplication1.Models.ViewModels
{
    public class ArchivosViewModels
    {
        [Display(Name = "Id de los Archivos")]
        public int IdArchivo { get; set; }

        [Display(Name = "Imagen")]
        public byte[]? Archivo { get; set; }

        [Display(Name = "Tipo de archivo:")]
        public string? TpArchivo { get; set; }

        [Display(Name = "Descripcion")]
        public string? Descripcion { get; set; }
    }
}
