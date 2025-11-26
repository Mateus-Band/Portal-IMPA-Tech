export default function ProjectCard({
  title,
  description,
}: {
  title: string;
  description: string;
}) {
  return (
    <div className="bg-white shadow-md rounded-lg p-5 border border-gray-200">
      <h3 className="text-lg font-semibold text-blue-700">{title}</h3>
      <p className="text-gray-600 mt-2">{description}</p>
    </div>
  );
}
