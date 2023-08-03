using System.ComponentModel.DataAnnotations;

namespace WebApplication1.Models.ViewModels
{
    public class SucursalesViewModels
    {
        [Display(Name = "Id de la sucursal")]
        public int IdSucursales { get; set; }

        [Required(ErrorMessage = "Se requiere una Longitud")]
        [Display(Name = "Coordenada de Longitud")]
        public double Longitud { get; set; }

        [Required(ErrorMessage = "Se requiere una Latitud")]
        [Display(Name = "Coordenada de Latitud")]
        public double Latitud { get; set; }

        [Required(ErrorMessage = "Ingrese el nombre de la Sucursal")]
        [Display(Name = "Sucursal")]
        public string Sucursal { get; set; }

        [Required(ErrorMessage = "Falta la direccion guia")]
        [Display(Name = "Direccion de la Sucursal")]
        public string Direccion { get; set; }
    }
}
