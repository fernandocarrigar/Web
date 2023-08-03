using Microsoft.AspNetCore.Mvc;
using System.Diagnostics;
using WebApplication1.Models;
using WebApplication1.Models.ViewModels;

namespace WebApplication1.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Index()
        {
            return View();
        }

        public async Task<IActionResult> Edicion(string form)
        {
            ViewData["form"] = form;

            return View();
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Edicion(SeccionesViewModels model)
        {
            if (ModelState.IsValid)
            {
                //var edicion = new Pagina()
                //{

                //};
            }
            return View(model);
        }

        public async Task<IActionResult> Catalogos()
        {
            return View();
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> Catalogos(ProductosViewModels model)
        {
            if (ModelState.IsValid)
            {

            }
            return View(model);
        }

        public async Task<IActionResult> Sucursales()
        {

            return View();
        }

        public async Task<IActionResult> CreateSucursales()
        {
            return View();
        }

        [HttpPost]
        [ValidateAntiForgeryToken]
        public async Task<IActionResult> CreateSucursales(SucursalesViewModels model)
        {
            return View(model);
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}