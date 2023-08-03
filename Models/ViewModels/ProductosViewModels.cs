using System.ComponentModel.DataAnnotations;

namespace WebApplication1.Models.ViewModels
{
    public class ProductosViewModels : ArchivosViewModels
    {
        [Display(Name = "Id del Producto")]
        public int? IdProducto { get; set; }

        [Display(Name = "Descripcion del producto")]
        public string? DescripcionProducto { get; set; }

        [Display(Name = "Marca")]
        public int? IdMarca { get; set; }

        [Display(Name = "Archivo")]
        public int? IdArchivo { get; set; }
    }
}
