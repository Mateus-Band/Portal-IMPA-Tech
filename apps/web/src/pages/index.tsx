import MainLayout from "../layouts/MainLayout";
import ProjectCard from "../components/ProjectCard";

export default function HomePage() {
  const mockProjects = [
    {
      id: 1,
      title: "Projeto de Visualização 3D",
      description: "Exploração de superfícies e teoremas com gráficos interativos.",
    },
    {
      id: 2,
      title: "Sistema de Entrega de Trabalhos",
      description: "Protótipo do sistema usado para submissão de PDFs e feedback.",
    },
    {
      id: 3,
      title: "Portal de Disciplinas",
      description: "Visão geral das disciplinas e materiais do curso.",
    },
  ];

  return (
    <MainLayout>
      <div className="max-w-4xl mx-auto text-center mt-12">
        <h1 className="text-3xl font-bold text-blue-700">
          Portal do Estudante IMPA Tech
        </h1>
        <p className="text-gray-600 mt-2">
          Protótipo funcional — layout básico já configurado.
        </p>

        {/* GRID DE PROJETOS */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
          {mockProjects.map(p => (
            <ProjectCard key={p.id} title={p.title} description={p.description} />
          ))}
        </div>
      </div>
    </MainLayout>
  );
}
