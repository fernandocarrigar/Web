using Microsoft.AspNetCore.Mvc.Rendering;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;

namespace WebApplication1.Models.ViewModels
{
    public class SeccionesViewModels : ArchivosViewModels
    {
        [Display(Name = "Id de la publicacion")]
        public int? SeccionesId { get; set; }

        [Display(Name = "Color Principal de la pagina")]
        public string? Principal { get; set; }

        [Display(Name = "Color Secundario de la pagina")]
        public string? Secundario { get; set; }

        [Display(Name = "Sección")]
        public string? Seccion { get; set; }

        public static List<SelectListItem> Secciones { get; } = new List<SelectListItem>
        {
            new SelectListItem { Value ="BackGround", Text = "Colores de la pagina" },
            new SelectListItem { Value ="ImagenesCarrusel", Text = "Carrusel de imagenes" },
            new SelectListItem { Value ="Productos", Text = "Productos del catalago" },
            new SelectListItem { Value ="Publicidad", Text = "Publicidad" }
        };
    }
}
